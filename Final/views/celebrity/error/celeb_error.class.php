<?php

/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * File: celeb_error.class.php
 * Description: this class displays errors if the celeb id can not be retrieved
 *
 */

class CelebError extends CelebrityIndexView
{

    public function display($message)
    {

        //display page header
        parent::displayHeader("Error");
        ?>

        <div id="main-header">Error</div>
        <hr>
        <table style="width: 100%; border: none">
            <tr>
                <td style="vertical-align: middle; text-align: center; width:100px">
                    <img src='<?= BASE_URL ?>/www/img/error.jpg' style="width: 80px; border: none"/>
                </td>
                <td style="text-align: left; vertical-align: top;">
                    <h3> Sorry, but an error has occurred.</h3>
                    <div style="color: red">
                        <?= urldecode($message) ?>
                    </div>
                    <br>
                </td>
            </tr>
        </table>
        <br><br><br><br>
        <hr>
        <a href="<?= BASE_URL ?>/celebrity/index">Back to celebrity list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

}