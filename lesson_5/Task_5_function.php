<?php

    $to_email = $_POST['to_email'];
    $to_subject = $_POST['to_subject'];
    $to_message = $_POST['to_message'];

    $to_email = trim($to_email);

    if( mail($to_email, $to_subject, $to_message)) {
        echo "ok";
    } else {
        echo "error";
    }