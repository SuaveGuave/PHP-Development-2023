<?php 
session_start();

require '../templates/template.html.php';
require '../templates/customerlogin.html.php';

$failedLogin = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $pdo->prepare('SELECT * FROM user_accounts WHERE username = :username');
    
    $values = [
        'username' => $_POST['username'],
    ];

    $stmt->execute($values);
    
    $user = $stmt->fetch();
    
    if ($user !== false && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['loggedin'] = $user['id'];
        echo '<main>';
        echo '<p style="color: green;">Logged in successfully!</p>';
        echo '</main>';
    } 
    else {
        $failedLogin = true;
    }
}
//works identically to the admin login, just in the "user_accounts" table instead. This does mean that the session can be held for both admins and customers at the same time
//so to get around this, there is a preventative measure in place to prevent customers who are logged in from having access to admin areas

if ($failedLogin) {
    echo '<p style="color: red;">Account not found or incorrect password</p>';
}
?>