<?php
session_start();

if (isset($_SESSION['adminloggedin']) && !isset($_SESSION['loggedin'])) {
    require '../templates/admintemplate.html.php';
    require '../templates/addproduct.html.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $productName = $_POST['productName'];
        $productDetails = $_POST['productDetails'];
        $price = $_POST['price'];
        $manufacturer = $_POST['manufacturer'];
        $category = $_POST['category'];
        $dateAdded = date('Y-m-d');
    
        $stmt = $pdo->prepare('INSERT INTO products (product_name, product_details, price, manufacturer, category, date_added) VALUES (:productName, :productDetails, :price, :manufacturer, :category, :dateAdded)');
    
        $stmt->execute([
            ':productName' => $productName,
            ':productDetails' => $productDetails,
            ':price' => $price,
            ':manufacturer' => $manufacturer,
            ':category' => $category,
            ':dateAdded' => $dateAdded,
        ]);
        
        echo '<main>';
        echo '<p style="color: green;">Product added successfully!</p>';
        echo '</main>';
    }
    //takes each field entered into the form and inserts it to the appropriate column in the database table
}
else {
    echo 'Sorry, you must be logged in and make sure you are not logged in as a customer to view this page.';
}

?>