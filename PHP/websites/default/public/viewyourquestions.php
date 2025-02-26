<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    require '../templates/template.html.php';
    echo '<main>';
    
    $query = 'SELECT * FROM questions WHERE asker_id = :userId';

    $stmt = $pdo->prepare($query);
    $stmt->execute([':userId' => $_SESSION['loggedin']]);

    $questions = $stmt->fetchAll();

    echo '<main>';
    echo '<h3>Below is a list of all the current questions you have asked about products, regardless of if they have been answered yet or not.</h3>';
    echo '</br>';
    echo '<ul class="questions">';
    foreach ($questions as $question) {
        echo '<li>';
        echo '<p>Product ID: ' . ($question['product_id']) . '</p>';
        echo '<p>Question: ' . ($question['question']) . '</p>';
        echo '<p>Answer: ' . ($question['answer']) . '</p>';
        echo '<div class="details">';
        echo '<strong>Asked by: ' . ($question['asker_name']) . '</strong>';
        echo '<em>' . ($question['date_asked']) . '</em>';
        echo '</div>';
        echo '</br>';
    }

    echo '</main>';
}
//lists all user questions that they have asked regardless of product and if they have been answered yet or not.
else {
    echo '<main>';
    echo 'To view your questions, please sign in.';
    echo '</main>';
}
//if someone is not logged in and they view this page, since nothing would show up, a message telling them to login appears instead.
?>