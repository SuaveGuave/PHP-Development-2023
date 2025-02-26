<!doctype html>
<html>
	<?php 
	require '../templates/template.html.php';
	?>

	<main>
    <?php
        if (isset($_GET['category'])) {
            $category = $_GET['category'];

			$query = 'SELECT * FROM products WHERE category = :category ORDER BY date_added DESC';
			$stmt = $pdo->prepare($query);
            $stmt->execute([':category' => $category]);

            $results = $stmt->fetchAll();

			echo '<ul class="products">';

			foreach ($results as $row) {
				echo '<li>';
    			echo '<h3><a href="product.php?id=' . $row['product_id'] . '">' . ($row['product_name']) . '</a></h3>';
    			echo '<p>' . ($row['product_details']) . '</p>';
    			echo '<div class="price">£' . number_format($row['price'], 2) . '</div>';
    			echo '</li>';
			}

			echo '</ul>';
        }
		/*displays the current product according to the matching category in the database. Each product has a category
		and there is also a table for said categories. there is code in the website template that runs a select query to display each
		category in the drop down for categories, and then sets each one as a link to this page, but sets the category value in the url to whatever was clicked on
		this then checks that category value, and displays all products under that category within the database, and then using their product id, sets their name
		as a link which can be clicked on to go to their product page (product.php) and sets the id value in the url to the matching id of that product
		*/
	?>
	</main>

</html>