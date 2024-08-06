<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $log_in =  $_POST['login'];
        $Pass_word = $_POST['pwd'];
        //echo $log_in."  ".$Pass_word;
    ?>
    <h1 style="text-align: center;">Webborad KakKak</h1>
    <hr>
    <p style="text-align: center;">
        เข้าสู่ระบบด้วย<br>
        login = <?php echo  $log_in ?><br>
        Password = <?php echo  $Pass_word ?>
    </p>
</body>
</html>