<?php 
$server = 'mysql';
$username = 'student';
$password = 'student';
$schema = 'CSY2089';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);
?>

<!doctype html>
<html>
	<head>
		<title>Ed's Electronics Admin Page</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="electronics.css" />
	</head>

	<body>
		<header>
			<h1>Admin Area</h1>

			<ul>
				<li><a href="addcategory.php" >Add Categories</a></li>
				<li><a href="addproduct.php">Add Products</a></li>
				<li>Questions
					<ul>
						<a href="viewallquestions.php?">All</a> </br>
						<a href="viewquestions.php?">Unanswered</a>
					</ul>
				</li>
				<li><a href="addadminuser.php">Add admin user</a></li>
			</ul>
		</header>



    </body>


		<footer>
			&copy; Ed's Electronics 2023
		</footer>