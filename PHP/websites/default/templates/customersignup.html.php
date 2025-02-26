<!doctype html>

<html>
	<body>
		<head>
        <style>
        form {
            display: grid;
            gap: 5px;
        }

        label {
            font-weight: bold;
        }
        </style>
		</head>

        <main>

        <h2>Here you may sign up to our website. Please input a username, password, and display name. You will log in with your username and password, and your display name will be used when you ask questions about a product.</h2>

        <form action="customersignup.php" method="post">
            <label>Username:</label>
            <input type="text" id="username" name="username" required>

            <label>Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Display Name:</label>
            <input type="text" id="displayname" name="displayname" required>
            
            <input type="submit" value="Create User">
        </form>

        </main>
    </body>
