<html>
    <head>
        <title>Task_5</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Cообщение</p>
        <p>Обязательное поле *</p>
        <form action="Task_5_function.php" method="post">
            <lable for="email">Кому: <span class="binding">*</span></lable>
            <input id="email" type="text" name="to_email" placeholder="укажите email" required></input>
            <lable for="subject_message">Тема: <span class="binding">*</span></lable>
            <input id="subject_message" type="text" name="to_subject" placeholder="укажите тему сообщения" required></input>
            <lable for="message">Сообщение: <span class="binding">*</span></lable>
            <input id="message" type="text" name="to_message" placeholder="укажите текст сообщения" required></input>
            <input id="message_submit" type="submit" value="отправить"></input>
        </form>
    </body>
</html>