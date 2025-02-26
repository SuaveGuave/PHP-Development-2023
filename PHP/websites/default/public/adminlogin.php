<?php
$server = 'mysql';
$username = 'student';
$password = 'student';
$schema = 'CSY2089';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

session_start();
unset($_SESSION['loggedin']);
//unsets any customer logins, as to make sure that customers cant abuse the session variable to get into the admin area, it does not allow anyone in who has a set customer session

$failedLogin = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $stmt = $pdo->prepare('SELECT * FROM admin_accounts WHERE username = :username');
    
    $values = [
        'username' => $_POST['username'],
    ];

    $stmt->execute($values);
    
    $user = $stmt->fetch();
    
    if ($user !== false && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['adminloggedin'] = $user['id'];
        header('Location: adminhome.php');
        exit();
    } 
    else {
        $failedLogin = true;
    }
    //checks to see if the input username and password match up with a username and hashed password in the database, if it doesnt it sets the failed login variable to true
    
}

require '../templates/adminlogin.html.php';

if ($failedLogin) {
    echo '<p style="color: red;">Account not found or incorrect password</p>';
}
//when failed login is set to true, it displays text explaining that you failed to log in
?>