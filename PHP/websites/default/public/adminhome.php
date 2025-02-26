<?php
session_start();

if (isset($_SESSION['adminloggedin']) && !isset($_SESSION['loggedin'])) {
    require '../templates/admintemplate.html.php';
    echo '<main>';
    echo '<h2>Welcome to the admin home page!</h2>';
    echo '<p>Here, you can add new product categories, add new products, view all current customer questions and answer them, and create new admin users.</p>';
    echo '</main>';
}
else {
    echo 'Sorry, you must be logged in and make sure you are not logged in as a customer to view this page.';
}
//simple if statement to check if the admin is looged in properly or not. If your session variable has not been set to logged in, it will display a message telling you to login, this is present on every admin page
//There is also a check to make sure there isnt an active customer session, otherwise it would allow customers to access admin areas which is not good
?>