<!doctype html>

<html>
    <head>
    <style>
        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }
    </style>
    </head>

	<body>
    <main>
    <h2>Welcome to the add product page</h2>
    <p>Please insert appropriate product names, details, prices, manufacturers, 
        and a category from the drop down of currently available categories. Note: please do not put "," in the price column.
    </p>
    </br>
    <form action="addproduct.php" method="post">
        <label for="productName">Product Name:</label>
        <input type="text" id="productName" name="productName" required>

        <label for="productDetails">Product Details:</label>
        <textarea id="productDetails" name="productDetails" rows="4" required></textarea>

        <label for="price">Price (£):</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="manufacturer">Manufacturer:</label>
        <input type="text" id="manufacturer" name="manufacturer" required>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <?php
                $stmt = $pdo->query('SELECT category FROM categories');
                while ($row = $stmt->fetch()) {
                    echo '<option value="' . $row['category'] . '">' . $row['category'] . '</option>';
                }
            ?>
        </select>
        <input type="submit" value="Add Product"> 
    </form>

    </main>
    </body>

</html>	