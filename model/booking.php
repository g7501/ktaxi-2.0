<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $phoneNumber = $_POST["phoneNumber"];
        $message = $_POST["message"];

        $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
        $to = "khaldoon.taxi@gmail.com";
        $subject = "New contact form submission from $name";
        $headers = "From: My website ";
    
        if (mail($to, $subject, $txt, $headers)) {
            header('Location: ../index.html');
        }
      }