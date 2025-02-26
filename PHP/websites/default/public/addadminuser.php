<?php
session_start();

if (isset($_SESSION['adminloggedin']) && !isset($_SESSION['loggedin'])) {
    require '../templates/admintemplate.html.php';
    require '../templates/addadminuser.html.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $displayName = $_POST['displayname'];
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        //takes the password that was inputted and turns it into a hashed password to store

        $stmt = $pdo->prepare('INSERT INTO admin_accounts (username, password, display_name) VALUES (:username, :password, :displayname)');
        $stmt->execute([
            ':username' => $username,
            ':password' => $hashedPassword,
            ':displayname' => $displayName
        ]);
        //stores the information to each relevant column in the database table

        echo '<main>';
        echo '<p style="color: green;">Admin user added successfully!</p>';
        echo '</main>';
    }
}
else {
    echo 'Sorry, you must be logged in and make sure you are not logged in as a customer to view this page.';
}

?>