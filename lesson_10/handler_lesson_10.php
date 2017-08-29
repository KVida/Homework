<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['userNickName'])) {
        $userNickName = $_POST['userNickName'];
    } else {
        echo "error: userNickName";
    }

    if (isset($_POST['userPassword'])) {
        $userPassword = $_POST['userPassword'];
    } else {
        echo "error: userPassword";
    }
    $error =array();

    function addUser($userNickName, $userPassword) {
        $userFile = fopen('userFile.txt', 'a+');
        $pass = password_hash($userPassword,PASSWORD_DEFAULT);
        $string = $userNickName . '|||' . $pass . '|||'. "\n";
        fwrite($userFile, $string);
        fclose($userFile);
    }
    
    if ((preg_match('/^[a-z0-9-]{2,}$/i', $userNickName)) && (preg_match('/[A-Za-z0-9]{4,}$/u', $userPassword))) {
        
        addUser($userNickName,$userPassword);
        
        echo "Валидация пройдена.";
        
    } elseif (preg_match('/^[a-z0-9-]{2,}$/i', $userNickName)) {
        
        echo "error: Password";
    } elseif (preg_match('/[A-Za-z0-9]{4,}$/u', $userPassword)) {
        echo "error: NickName";
    } else {
        echo "error: NickName & Password";
    }
}
?>