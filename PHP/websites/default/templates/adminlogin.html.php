<!doctype html>

<html>
	<head>
		<title>Ed's Electronics Admin Page</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="electronics.css" />
	</head>

	<body>
		<header>
			<h1>Ed's Electronics Admin Page</h1>


		</header>

        <h2>Admin Login</h2>

        <form action="adminlogin.php" method="post">
            <label>Username:</label>
            </br>
            <input type="text" id="username" name="username" required>

            <label>Password:</label>
            </br>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>

    </body>


		<footer>
			&copy; Ed's Electronics 2023
		</footer>