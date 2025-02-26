<!doctype html>

<?php 
$server = 'mysql';
$username = 'student';
$password = 'student';
$schema = 'CSY2089';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password);

$queryCategories = 'SELECT * FROM categories';
$stmtCategories = $pdo->query($queryCategories);
$categories = $stmtCategories->fetchAll();
?>

<html>
	<head>
		<title>Ed's Electronics</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="electronics.css" />
	</head>

	<body>
		<header>
			<h1>Ed's Electronics</h1>


			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Products
					<ul>
					<?php foreach ($categories as $category): ?>
                		<li><a href="products.php?category=<?php echo urlencode($category['category']); ?>"><?php echo ($category['category']); ?></a></li>
						<!--This displays the list of categories into the categories drop down currently present in the database, and turns them to a link to the categories page but with the category in the url set to the one you clicked on-->
            		<?php endforeach; ?>
					</ul>
				</li>
				<li><a href="customerlogin.php">Sign in</a></li>
				<li><a href="customersignup.php">Sign up</a></li>	
				<li><a href="viewyourquestions.php">View your questions</a></li>		
			</ul>

			<address>
				<p>We are open 9-5, 7 days a week. Call us on
					<strong>01604 11111</strong>
				</p>
			</address>



		</header>

		<footer>
			&copy; Ed's Electronics 2023
		</footer>