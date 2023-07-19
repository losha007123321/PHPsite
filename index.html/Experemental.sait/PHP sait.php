<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт для PHP</title>
</head>
<body>
    <style>
body{
    border: double red 20px;
    border-radius: 40px;
    height: 680px;
}

.maintext{
    font-size: 80px;
    color: green;
    font-family: fantasy;
    text-shadow: yellow 10px 0 0px, 0 0 1em rgb(255, 251, 0), 0 0 0.2em rgb(255, 0, 0);
    transition-property: font-size, color, text-shadow;
    transition-duration: 1s, 0.5s, 0.5s;
}

.maintext:hover{
    font-size: 100px;
    color: red;
    text-shadow: blue 3px 0 10px;
    /* text-shadow: blue 16px 0 0px, 0 0 1em rgb(255, 251, 0), 0 0 0.2em rgb(255, 0, 0); */
}

.button{
    font-size: 30px;
    color: yellow;
    background-color: brown;
    border: black ridge;
    border-radius: 15px;
    transition-property: font-size, color, background-color, box-shadow;
    transition-duration: 1s, 0.5s, 0.5s, 0.5s;
    box-shadow: 8px 8px 3px green;
}

.button:hover{
    font-size: 45px;
    color: white;
    background-color: purple;
    box-shadow: 8px 8px 3px red;
}

.textarea{
    font-size: 30px;
    color: yellow;
    background-color: brown;
    border: black ridge;
    border-radius: 15px;
    width: 500px;
    height: 100px;
}

.input{
    font-size: 30px;
    color: yellow;
    background-color: brown;
    border: black ridge;
    border-radius: 15px;
    width: 500px;
}
    </style>
    <center><p><a class="maintext">Приветствую себя на сайте <br>по пробной отправке данных!</a></p></center>
<br><br><br><br>
<center>
<form action="http://accepter.info/Accepterinfo.php" method="post">
<input class="input" type="email" name="email" placeholder="Введите свой email...."><br><br>
<textarea class="textarea" name="message" placeholder="Введите сообщение...."></textarea><br><br>
<button class="button" type="submit" name="send">Отправить сообщение</button>
</form>
</center>
<!-- <form action="Accepterinfo.php" method="post">
            <input type="email" name="email" placeholder="Введите свой email...."><br><br>
            <textarea name="message" placeholder="Введите сообщение...."></textarea><br><br>
            <button type="submit" name="send">Отправить сообщение</button>
        </form> -->




    <?php
    
    ?>
</body>
</html>