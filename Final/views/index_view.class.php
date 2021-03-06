<?php
/*
 * Author: Christopher Schilling, Ashley Nguyen, Maimouna Diallo, Bryce Koehl
 * Date: 5/1/2020
 * Name: index_view.class.php
 * Description: the parent class for all view classes. The two functions display page header and footer.
 */

class IndexView
{

    //this method displays the page header
    static public function displayHeader($pageTitle)
    {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title> <?php echo $pageTitle ?> </title>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <link rel='shortcut icon' href='<?= BASE_URL ?>/www/img/favicon.ico' type='image/x-icon'/>
            <link type='text/css' rel='stylesheet' href='<?= BASE_URL ?>/www/css/app_style.css'/>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
                  crossorigin="anonymous">
            <script>
                //create the JavaScript variable for the base url
                var base_url = "<?= BASE_URL ?>";
            </script>
            <script type="text/javascript" src="<?= BASE_URL ?>/www/js/ajax_autosuggestion.js"></script>
        </head>
        <body>

        <div id='wrapper'>
        <div id="banner">
            <a href="<?= BASE_URL ?>/index.php" style="text-decoration: none" title="Celebrity Web Presence Data">
                <div align="center" style="padding-top: 25px;">

                    <span style='color: antiquewhite; font-size: 30pt; font-family: "Trebuchet MS", Helvetica, sans-serif'>
                                    🌟 Celebrity Web Data Showcase 🌟
                                </span>
                </div>
            </a>
        </div>
        <?php
    }//end of displayHeader function

    //this method displays the page footer
    public static function displayFooter()
    {
        ?>
        <br><br><br>
        <div id="push"></div>
        </div>

        </body>
        </html>
        <?php
    } //end of displayFooter function
}
