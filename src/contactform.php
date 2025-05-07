<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "redmangamesstudio@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "New Response from the Pure Water NZ contact form".".\n\nName: ".$name.".\n\nEmail Address: ".$mailFrom.".\n\nSubject: ".$subject.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>