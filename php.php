<?php
 $name = $_POST ['name'];
 $visitor_email = $_POST ['email'];
 $message = $_POST ['message'];
 $subject = $_POST ['subject'];

 $email_from = "From:" .$visitor_email;
 $email_subject = "Subject:" .$subject;
 $email_body = "User Name:$name.\n".
                    "User Email: $visitor_email.\n". 
                        "User Message: $message.\n";

$to = "nikola@nikolaristic.in.rs";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?> 




