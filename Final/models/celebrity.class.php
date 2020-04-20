<?php

/*
 * Author: Louie Zhu
 * Date: Mar 6, 2016
 * Name: celebrity.class.php
 * Description: the celebrity class models a real-world celebrity.
 */

class Celebrity {

    //private data members
    private $id, $first_name, $last_name, $gender, $age, $web_presence, $most_active, $frequency;

    //the constructor
    public function __construct($first_name, $last_name, $gender, $age, $web_presence, $most_active, $frequency) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->age = $age;
        $this->web_presence = $web_presence;
        $this->most_active = $most_active;
        $this->frequency = $frequency;

    }

	//getters
    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getAge() {
        return $this->age;
    }

    public function getWebPresence() {
        return $this->web_presence;
    }

    public function getMostActive() {
        return $this->most_active;
    }

    public function getFrequency() {
        return $this->frequency;
    }
}
