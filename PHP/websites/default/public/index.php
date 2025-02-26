<!doctype html>
<html>
	<?php 
	require '../templates/template.html.php';
	require '../templates/index.html.php';
	?>

		<main>
		<?php 
		echo "<h1>Welcome to Ed's Electronics</h1>";
		echo "<p>We stock a large variety of electrical goods including phones, tvs, computers and games. Everything comes with at least a one year guarantee and free next day delivery.</p>";
		echo "</br>";
		echo "<hr>";
		echo "<p>10 most recently added products:</p>";
		echo "</br>";

		?>
			<?php
			$query = 'SELECT * FROM products ORDER BY date_added DESC LIMIT 10';
			$results = $pdo->query($query);

			echo '<ul class="products">';

			foreach ($results as $row) {
				echo '<li>';
    			echo '<h3><a href="product.php?id=' . $row['product_id'] . '">' . ($row['product_name']) . '</a></h3>';
    			echo '<p>' . ($row['product_details']) . '</p>';

    			if ($row['price'] !== null) {
        			echo '<div class="price">£' . number_format($row['price'], 2) . '</div>';
    			} 
				else {
        			echo '<div class="price">Price not available</div>';
    			}
    			echo '</li>';
			}

			echo '</ul>';
			//displays the 10 most recently added products by ordering all products by date added, but limiting the amount that can be displayed to 10
		?>
		</main>

</html>