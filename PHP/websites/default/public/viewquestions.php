<?php
session_start();

if (isset($_SESSION['adminloggedin']) && !isset($_SESSION['loggedin'])) {
    require '../templates/admintemplate.html.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer'])) {
        $answer = $_POST['answer'];
        $adminId = $_SESSION['loggedin'];

        $updateQuery = 'UPDATE questions SET answer = :answer, answerer_name = (SELECT display_name FROM admin_accounts WHERE id = :adminId), answered = "Y" WHERE question_id = :questionId AND answered = "N"';

        $stmt = $pdo->prepare($updateQuery);
        $stmt->execute([
            ':answer' => $answer,
            ':adminId' => $adminId,
            ':questionId' => $_POST['questionId']
        ]);
    }

    $query = 'SELECT * FROM questions WHERE answered = "N"';

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $questions = $stmt->fetchAll();

    echo '<main>';
    echo '<ul class="questions">';
    foreach ($questions as $question) {
        echo '<li>';
        echo '<p>Product ID: ' . ($question['product_id']) . '</p>';
        echo '<p>Question: ' . ($question['question']) . '</p>';
        echo '<div class="details">';
        echo '<strong>Asked by: ' . ($question['asker_name']) . '</strong>';
        echo '<em>' . ($question['date_asked']) . '</em>';
        echo '</div>';

        // Displays the answer form for the admin user to answer
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="questionId" value="' . ($question['question_id']) . '">';
        echo '<label>Your Answer:</label>';
        echo '<input type="text" name="answer" required>';
        echo '<input type="submit" value="Submit Answer">';
        echo '</form>';

        echo '</li>';
    }
    echo '</ul>';
    echo '</main>';
    //displays each question that has "N" in its answered columm, and then displays a submittable text box underneath for the admin to submit their answer
    //the admins display name is automatically used by taking their session id and matching it to the one stored in the database, and using the display name in that row
} else {
    echo 'Sorry, you must be logged in and make sure you are not logged in as a customer to view this page.';
}
?>