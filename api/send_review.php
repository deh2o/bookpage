<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $review = $_POST['review'];
    
    // Email address where you want to receive the reviews
    $to = "mcdonaldchris1982@gmail.com";
    
    // Subject of the email
    $subject = "New Review Submission";
    
    // Compose the message
    $message = "Name: " . $name . "\n";
    $message .= "Title: " . $title . "\n";
    $message .= "Review: \n" . $review . "\n";
    
    // Set headers
    $headers = "From: " . $name . " <" . $to . ">" . "\r\n";
    $headers .= "Reply-To: " . $to . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your review. It has been submitted.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Handle the case when not a POST request
    echo "Method not allowed.";
}

