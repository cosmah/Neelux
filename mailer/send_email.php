<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // Retrieve form data
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

   // Perform server-side validation (you can add your own validation logic)
   if (empty($name) || empty($email) || empty($phone) || empty($message)) {
      echo 'Please fill in all fields';
      exit;
   }

   // Set up email headers
   $to = 'jacfrost06@gmail.com'; // Replace with your email address
   $subject = 'New Contact Form Submission';
   $headers = "From: $name <$email>" . "\r\n";
   $headers .= "Reply-To: $email" . "\r\n";

   // Prepare the email body
   $body = "Name: $name\n";
   $body .= "Email: $email\n";
   $body .= "Phone: $phone\n\n";
   $body .= "Message:\n$message";

   // Send the email
   if (mail($to, $subject, $body, $headers)) {
      echo 'Email sent successfully';
   } else {
      echo 'Error occurred. Please try again later.';
   }
}
?>
