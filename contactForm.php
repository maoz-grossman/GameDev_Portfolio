<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $myMail= "mallardduckstudio@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have recived an e-mail from ".$name.".\n\n".$message;

    mail($myMail , $txt , $headers );
    header("Location: index.html?mailsend");
}