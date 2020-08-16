<?php
  $name=$_POST['name'];
  $visitor_email=$POST['email'];
  $message=$_POST['message'];
  $contact=$_POST['contact'];

  $email_from='From sahilnaik2712@gmail.com'

  $email_subject="New Form Testing";

  $email_body="User Name: $name.\n".
                "User Email:$visitor_email.\n".
                    "User Message: $message.\n";
                    "User Contact: $contact.\n";
  $to="sahinaikprogramming@gmail.com";
  $headers="From: $email_from\r\n";
  $headers .="Reply-To:$visitor_email \r\n";

  mail($to,$email_subject,$email_body,$contact,$headers);

  header("Location:navbar.html");
?>
