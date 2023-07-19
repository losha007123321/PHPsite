<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accepter of info</title>
</head>
<body>
    <script>

    // setTimeout(function(){
    //     alert("Перейти на главную страницу.");
    //     windowlication = "Experemental.sait/PHP sait.php";
    // }, 2000);

// var time1 = 0;
// var time2 = setinterval(time3, 1000);
// function time3(){
//     time1 ++;
//     if (time1 == 1){
//         windowlication = "http://experemental.sait/PHP%20sait.php";
//     }
// }

    </script>

<style>
    body{
    border: double blue 20px;
    border-radius: 40px;
    height: 680px;
}

.maintext{
    font-size: 80px;
    color: red;
    font-family: cursive;
    text-shadow: blue 3px 0 10px;
    transition-property: font-size, color, text-shadow;
    transition-duration: 1s, 0.5s, 0.5s;
    position: relative;
    top: 200px;
}

.maintext:hover{
    font-size: 100px;
    color: green;
    text-shadow: red 3px 0 10px;
    /* text-shadow: blue 16px 0 0px, 0 0 1em rgb(255, 251, 0), 0 0 0.2em rgb(255, 0, 0); */
}
</style>
<center><a class="maintext">
<?php
// print_r($_POST);
$email = $_POST["email"];
$message = $_POST["message"];

$error = "";
if(trim($email) == "")
$error = "Введите email";
else if (trim($message) == "")
$error = "Введите сообщение";
else if (strlen($message) < 3)
$error = "Сообщение должно иметь <br> больше 2-ух символов";

if($error != ""){
echo $error;
exit;
}


$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
mail("olexytokmachov@gmail.com", $subject, $message, $headers);
header("Location: http://experemental.sait/PHP%20sait.php");

?>
</a></center>


</body>
</html>