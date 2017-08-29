<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error =array();

    if ((isset($_POST['userNickName'])) && (!empty($_POST['userNickName']))) {
        $userNickName = $_POST['userNickName'];
    } else {
        $error[] = 1 ;
    }

    if ((isset($_POST['userPassword'])) && (!empty($_POST['userPassword']))) {
        $userPassword = $_POST['userPassword'];
    } else {
        $error[] = 2;
    }

    function getUser($userNickName, $userPassword) {
        $userFile = fopen('userFile.txt', 'r');

        $arr =array();
        while ($line=fgets($userFile)) {
            $arr[]=explode('|||', $line);
        }

        foreach ($arr as $user) {
            if ($user[0] == $userNickName) {
                if (password_verify($userPassword,$user[1])){
                    $sucsess = true;
                } else {
                    $sucsess = false;
                }
            }
        }
        fclose($userFile);
        return $sucsess;
    }

    function errorValidarorForm ($error) {
        $countError = count($error);
        for ($i=0; $i < $countError; $i++) { 
            switch ($error[$i]) {
                case 1:
                    $errorMessage = 'error: Вы не ввели NickName';
                    break;
                case 2:
                    $errorMessage =  'error: Вы не ввели Password';
                    break;

                case 11:
                    $errorMessage =  'error: Валидация пароля не пройдена.';
                    break;
                case 12:
                    $errorMessage =  'error: Валидация логина не пройдена.';
                    break;
                case 13:
                    $errorMessage =  'error: Валидация логина и пароля не пройдена.';
                    break;

                case 10:
                    $errorMessage =  'Валидация пройдена: Пользователя c даным паролем не найдено';
                    break;
                case 20:
                    $errorMessage =  'Валидация пройдена: Пользователь найден';
                    break;
            }
            echo $errorMessage;
            break;
        }
    }

    if ((preg_match('/^[a-z0-9]{4,}$/i', $userNickName)) && (preg_match('/[A-Za-z0-9-\!\?\*]{4,}$/u', $userPassword))) {   
        if (getUser($userNickName,$userPassword)) {
            $_SESSION['testValidation'] = 'Валидация пройдена.';
            $error[] = 20; 
        } else {
            $error[] = 10;
        }       
    } elseif (preg_match('/^[a-z0-9]{4,}$/i', $userNickName)) {
        $error[] = 11; 
    } elseif (preg_match('/[A-Za-z0-9-\!\?\*]{4,}$/u', $userPassword)){
        $error[] = 12; 
    } else {
        $error[] = 13;
    }
    errorValidarorForm($error);
}
?>