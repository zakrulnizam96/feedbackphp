<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['Email']);
    $rating = intval($_POST['rating']);
    $comments = $conn->real_escape_string($_POST['comments']);

    $sql = "INSERT INTO feedbacks (name, email, rating, comments) VALUES ('$name', '$email', $rating, '$comments')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Feedback submitted successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
