<?php
/**
 * Author: "Ashley Nguyen"
 * Date: 4/23/2020
 * File: celebrity_add.class.php
 * Description: this class is for adding a new celebrity profile to the database
 */

class CelebrityAdd extends CelebrityIndexView
{
    public function display($celebrity, $confirm = "") {

        //retrieve celebrity details by calling get methods
        $celeb_id = $celebrity->getCelebId();
        $first_name = $celebrity->getFirstName();
        $last_name = $celebrity->getLastName();
        $gender = $celebrity->getGender();
        $age = $celebrity->getAge();
        $web_presence = $celebrity->getWebPresence();
        $most_active = $celebrity->getMostActive();
        $post_frequency = $celebrity->getPostFrequency();
        ?>

        <div id="main-header">Add in New Celebrity Details</div>

        <form class="new-media"  action='<?= BASE_URL . "/celebrity/add/" . $celeb_id?>' method="post" style="border: 1px solid #bbb; margin-top: 10px; padding: 10px;">>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input name="first_name" type="text" size="100" required/></td>
                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td><input name="last_name" type="text" size="100" required/></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input name="gender" type="text" size="100" required/></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input name="age" type="text" size="100" required/></td>
                </tr>
                <tr>
                    <td>Web Presence: </td>
                    <td><input name="web_presence" type="text" size="100" required /></td>
                </tr>
                <tr>
                    <td>Most Active: </td>
                    <td><input name="most_active" type="text" size="100" required /></td>
                </tr>
                <tr>
                    <td>Post Frequency: </td>
                    <td><input name="post_frequency" type="text" size="100" required /></td>
                </tr>
            </table>
            <div>
                <input type="submit" name="action" value="Add New Celebrity"/>
                <input type="button" value="Cancel" onclick='window.location.href = "<?= BASE_URL . "/celebrity/index/" . $celeb_id ?>"'
            </div>
        </form>

        <?php
    }
//end of display method
}