<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in()) {
    //flash("Welcome, " . get_user_email(");
} else {
    flash("You're not logged in");
}
//shows session info
flash("<pre>" . var_export($_SESSION, true) . "</pre>");
?>
<?php require_once(__DIR__."/../../partials/flash.php");