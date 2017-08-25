<?php
    if (isset($_POST['userLogin'])) {
        $userLogin = $_POST['userLogin'];
    } else {
        echo "error: Введите Login! ";
    }

    if (isset($_POST['userName'])) {
        $userName = $_POST['userName'];
    } else {
        echo "error: Введите Name! ";
    }

    if (isset($_POST['userEmail'])) {
        $userEmail = $_POST['userEmail'];
    } else {
        echo "error: Введите Email! ";
    }

    if (isset($_POST['userPassword'])) {
        $userPassword = $_POST['userPassword'];
    } else {
        echo "error: Введите Password! ";
    }


//Login
    if (preg_match('/^[A-Za-z0-9]{4,}$/', $userLogin)) {
        echo "Логин соотвествует";
    } else {
        echo "Логин НЕ соотвествует!!!";
    }

    
//Name
    if (preg_match('/^[А-Яа-яЁё-]+$/u', $userName)) {
        echo "Имя соотвествует";
    } else {
        echo "Имя НЕ соотвествует!!!";
    }

//Email
    if (preg_match('/^[a-z0-9]+([a-z0-9\.-]+)*@([a-z0-9]+)\.([a-z]+){2,}$/i', $userEmail)) {
        echo "Email соотвествует";
    } else {
        echo "Email НЕ соотвествует!!!";
    }

//Password
    if (preg_match('/([A-Za-z0-9]+([A-Za-z0-9\/\-\*\?]+)*){4,}/', $userPassword)) {
        echo "Password соотвествует";
    } else {
        echo "Password НЕ соотвествует!!!";
    }
    