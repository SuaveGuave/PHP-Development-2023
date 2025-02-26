<?php
session_start();

if (isset($_SESSION['adminloggedin']) && !isset($_SESSION['loggedin'])) {
    require '../templates/admintemplate.html.php';

    echo '<main>';
    echo '<h2>Below is a list of all current questions and answers, regardless of if they have been answered or not. 
    To answer questions that have not yet been answered, please go to the "unanswered" section in the "questions" drop down of the navigation bar.</h2>';
    echo '</br>';

    $query = 'SELECT * FROM questions';

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $questions = $stmt->fetchAll();

    
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
        echo '</li>';
    }
    echo '</ul>';
    echo '</main>';
} else {
    echo 'Sorry, you must be logged in and make sure you are not logged in as a customer to view this page.';
}
//lists all questions present in the database regardless of if they have been answered or not. To answer them, you must go to the page that filters them by unanswered
?>