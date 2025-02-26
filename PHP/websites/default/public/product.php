<?php
session_start();
?>
<!doctype html>
<html>
	<?php 
	require '../templates/template.html.php';
	?>

	<main>
    <?php
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];
    
        $query = 'SELECT * FROM products WHERE product_id = :productId';
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([':productId' => $productId]);
    
        $product = $stmt->fetch();
    
        if ($product) {
            echo '<h3>' . ($product['product_name']) . '</h3>';
            echo '<h4>Manufacturer:</h4>';
            echo '<p>' . ($product['manufacturer']) . '</p>';
            echo '<h4>Product details:</h4>';
            echo '<p>' . ($product['product_details']) . '</p>';
        } 
        else {
            echo '<p>Product not found.</p>';
        }
    } 
    else {
        echo '<p>Product ID not provided.</p>';
    }
    //selects all the product information and displays it based on the product id that has been saved to the URL
    //In the event that a user accesses this website without an ID being set, or a product was missing information, relevant error messages are displayed


    echo "</br>";
	echo "<hr>";
	echo "</br>";



    if (isset($_GET['id'])) {
        $productId = $_GET['id'];
    
        $query = 'SELECT * FROM questions WHERE product_id = :productId AND answered = "Y"';
        $stmt = $pdo->prepare($query);

        $stmt->execute([':productId' => $productId]);

        $questions = $stmt->fetchAll();

        if ($questions) {
            echo "<p>Questions asked about this product:</p>";
            echo '<ul class="reviews">';
            foreach ($questions as $question) {
                echo '<li>';
                echo '<p>' . ($question['question']) . '</p>';
                echo '<p>Answer: ' . ($question['answer']) . '</p>';
                echo '<div class="details">';
                echo '<strong>Asked by: ' . ($question['asker_name']) . '</strong>';
                echo '</br>';
                echo '<em>' . ($question['date_asked']) . '</em>';
                echo '</br>';
                echo '<strong>Answered by: ' . ($question['answerer_name']) . '</strong>';
                echo '</div>';
                echo '</li>';
            }
            echo '</ul>';
        } 
        else {
            echo '<p>No questions have been asked about this product.</p>';
        }
    } 
    else {
        echo '<p>An error has occured and the product ID is not found. Please return to the home page.</p>';
    }
    //displays all current questions about the product, by matching the product id in the questions table, to the id currently set in the url for the product
    //only displays those that have been answered, this both prevents spam as it wont immediately show questions that people input, but also is used as a way to let admins filter by only unanswered questions


    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $userId = $_SESSION['loggedin'];
    $question = $_POST['question'];

    if (isset($_GET['id'])) {
        $productId = $_GET['id'];

        $displayNameQuery = 'SELECT display_name FROM user_accounts WHERE id = :userId';
        $displayNameStmt = $pdo->prepare($displayNameQuery);
        $displayNameStmt->execute([':userId' => $userId]);
        $user = $displayNameStmt->fetch();

        $query = 'INSERT INTO questions (question, asker_name, asker_id, date_asked, product_id) VALUES (:question, :askerName, :userId, NOW(), :productId)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([':question' => $question, ':askerName' => $user['display_name'], ':userId' => $userId, ':productId' => $productId]);

        echo '<main>';
        echo '<p style="color: green;">Question submitted successfully!</p>';
        echo '</main>';
    } 
    else {
        echo '<p>An error has occured and the product ID you are trying to submit a question for is not found. Please return to the home page.</p>';
    }
    }
    /*allows users to input a question about the product they are viewing. It will automatically insert their question into the table,
    and use the id in the url to set the product ID, will use their display name if they are logged in as the asker name, and the rest are default values that are set
    automatically, such as "answered" to "N", and the date to the current system date.
    */
    require '../templates/product.html.php';
    ?>
	</main>

</html>
