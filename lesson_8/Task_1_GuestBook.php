<?php 
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    $guestBook = fopen('Task_1_GuestBook.txt','a+');    

    if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['userName']))) {
        if ($_POST['userName'] != '') {
            $userName = $_POST['userName'];
            $userTime = date('Y-m-d H:m:s');
            $userUrl = $_SERVER["REQUEST_URI"]; 

            $guest = $userName . ' ' . $userTime . ' ' .  $userUrl;
            fwrite($guestBook,"$guest\r");

            header("location: Task_1.php");
        } else {
            echo "error_1: Ведите имя!";
        }
        
    } else {
        echo "error_2: Ведите имя!";
    }    

    fclose($guestBook);