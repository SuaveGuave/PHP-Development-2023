<?php    
    require '../templates/template.html.php';
    require '../templates/customersignup.html.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $displayName = $_POST['displayname'];
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $stmt = $pdo->prepare('INSERT INTO user_accounts (username, password, display_name) VALUES (:username, :password, :displayname)');
        $stmt->execute([
            ':username' => $username,
            ':password' => $hashedPassword,
            ':displayname' => $displayName
        ]);
    
        echo '<main>';
        echo '<p style="color: green;">Account created successfully!</p>';
        echo '</main>';
    }
    //works the same as the adding an admin user, just adds the data to the user_accounts table instead
?>