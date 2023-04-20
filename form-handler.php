<?php
$name = $_POST['name']; 
$visitor_email = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 

$email_from = 'info@says.edu.gh';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n". 
              "User Message: $message .\n";

              $to = 'nyamekye2131@gmail.com'
              $to = 'acquah101@hotmail.com'

              $headers = "From: $email_from \r\n"; 

              $headers = "Reply-To: $vivtors_email \r\n\";

              mail($to,$email_subject,$email_body, $headers);
              header("Location: contact.html");