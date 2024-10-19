<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $message = $_POST['message'];
    $emailTo = "suarezrenz62@gmail.com"; // Replace with your email

    // Send email
    mail($emailTo, ucfirst($type) . " Submission", $message);

    // Save feedback/suggestion to a file
    $filename = "feedback_history.txt"; // File to store previous inputs
    $entry = "$type: $message\n";
    file_put_contents($filename, $entry, FILE_APPEND | LOCK_EX);
}
?>
