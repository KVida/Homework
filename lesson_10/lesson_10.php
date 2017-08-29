<p> Форма регистрации: </p>
<form method="post" action="/handler_lesson_10.php">
    <label for="userNickName">Login: </label>
    <input id="userNickName" type="text" name="userNickName" required>

    <label for="userPassword">Password: </label>
    <input id="userPassword" type="password" name="userPassword" required>

    <input type="submit" name="Reg" value="Регистрация">
</form>

<p> Форма авторизации: </p>
<form method="post" action="/handler2_lesson_10.php">
    <label for="userNickName">Login: </label>
    <input id="userNickName" type="text" name="userNickName" >

    <label for="userPassword">Password: </label>
    <input id="userPassword" type="password" name="userPassword" >

    <input type="submit" name="Sing" value="Войти">
</form>