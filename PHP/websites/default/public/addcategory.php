<?php
session_start();

if (isset($_SESSION['adminloggedin']) && !isset($_SESSION['loggedin'])) {
    require '../templates/admintemplate.html.php';
    require '../templates/addcategory.html.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        if (!empty($_POST['category'])) {
            $category = $_POST['category'];
    
            $stmt = $pdo->prepare('INSERT INTO categories (category) VALUES (:category)');
            $stmt->execute([':category' => $category]);
            
            echo '<main>';
            echo '<p style="color: green;">Category added successfully!</p>';
            echo '</main>';
        }
    }
    //takes the value you put into the text box and assigns it into the categories database
}
else {
    echo 'Sorry, you must be logged in and make sure you are not logged in as a customer to view this page.';
}

?>