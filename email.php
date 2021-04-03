<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];



    $email_subject = "New Message From Site";
     
    $email_body = "UserName: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n".


    $to = "adeebkhan2004@gmail.com";

    $headers = "From: $visitor_email \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>