<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webborad KakKak</h1>
    <hr>
    <?php
        $id = $_GET['id'];    
    ?>
    <p style="text-align: center;">ต้องการดูกระทู้หมายเลข  <?php echo $id?></p>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr>
            <td style="background-color:#6cd2fe;">
                แสดงความคิดเห็น
            </td>
        </tr>
        <tr>
            <td align="center">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" value="ส่งข้อความ">
            </td>
        </tr>
    </table>
    <p style="text-align: center;">
    <a href="index.html">กลับไปหน้าหลัก</a>
    </p>
</body>
</html>