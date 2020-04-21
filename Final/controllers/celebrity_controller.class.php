<?php

/*
 * Author: Christopher Schilling, Ashley, Bryce, Maimouna
 * Date: April 19, 2020
 * File: celebrity_controller.class.php
 * Description: the celebrity controller
 *
 */

class CelebrityController {

    private $celebrity_model;

    //default constructor
    public function __construct() {
        //create an instance of the CelebrityModel class
        $this->celebrity_model = CelebrityModel::getCelebrity();
    }

    //index action that displays all celebrities
    public function index() {
        //retrieve all celebrities and store them in an array
        $celebs= $this->celebrity_model->list_celebrity();

        if (!$celebs) {
            //display an error
            $message = "There was a problem displaying celebrity.";
            $this->error($message);
            return;
        }

        // display all celebrities
        $view = new CelebrityIndex();
        $view->display($celebs);
    }

    //show details of a celebrity
    public function detail($id) {
        //retrieve the specific celebrity
        $celeb = $this->celebrity_model->view_celebrity($id);

        if (!$celeb) {
            //display an error
            $message = "There was a problem displaying the celebrity id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display celebrity details
        $view = new CelebrityDetail();
        $view->display($celeb);
    }

    //display a celebrity in a form for editing
    public function edit($id) {
        //retrieve the specific celebrity
        $celeb = $this->celebrity_model->view_celebrity($id);

        if (!$celeb) {
            //display an error
            $message = "There was a problem displaying the celebrity id='" . $id . "'.";
            $this->error($message);
            return;
        }

        $view = new CelebrityEdit();
        $view->display($celeb);
    }

    //update a celebrity in the database
    public function update($id) {
        //update the celebrity
        $update = $this->celebrity_model->update_celebrity($id);
        if (!$update) {
            //handle errors
            $message = "There was a problem updating the celeb id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display the updateed celebrity details
        $confirm = "The celebrity was successfully updated.";
        $celeb = $this->celebrity_model->view_celebrity($id);

        $view = new CelebrityDetail();
        $view->display($celeb, $confirm);
    }

    //search celebrity
    public function search() {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all celebrities
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching celebrities
        $celebs = $this->celebrity_model->search_celebrity($query_terms);

        if ($celebs === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);
            return;
        }
        //display matched celebrities
        $search = new CelebritySearch();
        $search->display($query_terms, $celebs);
    }
    //autosuggestion
    public function suggest($terms) {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $celebs = $this->celebrity_model->search_celebrity($query_terms);

        //retrieve all celebrity titles and store them in an array
        $titles = array();
        if ($celebs) {
            foreach ($celebs as $celeb) {
                $firstName[] = $celeb->getFirstName();
                $lastName[] = $celeb->getLastName();
            }
        }

        echo json_encode($celebs);
    }
    //handle an error
    public function error($message) {
        //create an object of the Error class
        $error = new CelebError();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        //$message = "Route does not exist.";
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
        return;
    }

}