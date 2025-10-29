<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $subject = $_POST['contactSubject'];
    $message = $_POST['contactMessage'];
    
    // Validate form data (you can add more validation here)
    if (empty($name) || empty($email) || empty($message)) {
        // If required fields are empty, return error message
        echo "Please fill in all required fields.";
    } else {
        // Send email (you need to configure this part)
        $to = "manndeepsainni@gmail.com"; // Your email address
        $headers = "From: $name <$email>" . "\r\n";
        $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";
        
        // Send email
        if (mail($to, $subject, $messageBody, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Error sending message. Please try again later.";
        }
    }
} else {
    // If form is not submitted, return error message
    echo "Invalid request.";
}
?>
