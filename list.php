<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
require_once 'function.php';
?>
<div class="container">
    <div class="p-3 mb-2 bg-primary text-dark">
        <h3 style="text-align: center">Thông tin của bạn</h3>
        <?php

        session_start();
        if (isset($_SESSION['list'])) {
            echo '<h3 style="color: white">FirstName: '.$_SESSION['list'].'</h3>';
            var_dump($_SESSION);
        } else {
            echo '<h3 style="text-align: left; color:red">Lỗi</h3>';
        }
        unset($_SESSION['list']);

        ?>
    </div>
</div>
<hr>
<?php
if (!empty($_GET['message'])){
    $messageCode = $_GET['message'];
    echo get_message($messageCode);
}
?>
</body>
</html>