<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Server-side validation
    if (empty($fname) || empty($email) || empty($number) || empty($message)) {
      echo "error";
    } else {
      // Send email (modify the code below to fit your requirements)
      $to = "jobpiller@gmal.com";
      $subject = "New Form Submission";
      $body = "First Name: " . $fname . "\n";
      $body .= "Email: " . $email . "\n";
      $body .= "Number: " . $number . "\n";
      $body .= "Message: " . $message . "\n";

      if (mail($to, $subject, $body)) {
        echo "success";
      } else {
        echo "error";
      }
    }
  }
?>
