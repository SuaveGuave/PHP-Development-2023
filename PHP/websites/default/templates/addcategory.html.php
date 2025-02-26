<!doctype html>

<html>

	<body>
    <main>
    <h2>Welcome to the add category page</h2>
    <p>Warning: Categories are not case sensitive when being put into the database. Please ensure you format them appropriately, with a capital letter at the beginning, and any other capitals that make sense in the name e.g. "TV". 
        If your category is made up of multiple words, please put "_" instead of spaces.
    </p>
    </br>
    <form action="addcategory.php" method="post">
        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required>

        <input type="submit" value="Add Category">
    </form>

    </main>
    </body>

</html>	