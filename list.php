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
//require_once 'function.php';
?>
<div class="container">
    <div class="p-3 mb-2 border border-primary bg bg-success text-dark">
        <h3 style="text-align: center">Thông tin của bạn</h3>
        <?php
        session_start();
        if (isset($_SESSION['list'])) {
            echo '<h4 style="color: white">FirstName: '.$_SESSION['list(0)'].'</h4>';
            echo '<h4 style="color: white">LastName: '.$_SESSION['list(1)'].'</h4>';
            echo '<h4 style="color: white">Email: '.$_SESSION['list(2)'].'</h4>';
            echo '<h4 style="color: white">PhoneNumber: '.$_SESSION['list(3)'].'</h4>';
            echo '<h4 style="color: white">Address: '.$_SESSION['list(4)'].' '.$_SESSION['list(5)'].'</h4>';
            echo '<h4 style="color: white">City: '.$_SESSION['list(6)'].'</h4>';
            echo '<h4 style="color: white">State/Province: '.$_SESSION['list(7)'].'</h4>';
            echo '<h4 style="color: white">Postal / Zip Code: '.$_SESSION['list(8)'].'</h4>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<h4 style="color: white">Check-in Date: '.$_SESSION['list(9)'].'</h4>';
            echo '<h4 style="color: white">Check-out Date: '.$_SESSION['list(10)'].'</h4>';
            echo '<h4 style="color: white">Address: '.$_SESSION['list(11)'].' '.$_SESSION['list(12)'].'</h4>';
            echo '<h4 style="color: white">City: '.$_SESSION['list(13)'].'</h4>';
            echo '<h4 style="color: white">State/Province: '.$_SESSION['list(14)'].'</h4>';
            echo '<h4 style="color: white">Postal / Zip Code: '.$_SESSION['list(15)'].'</h4>';
            echo '<h4 style="color: white">RoomType: '.$_SESSION['list(16)'].'</h4>';
            echo '<h4 style="color: white">Smoking: '.$_SESSION['list(17)'].'</h4>';
            echo '<h4 style="color: white">ofGuest: '.$_SESSION['list(18)'].'</h4>';
            echo '<h4 style="color: white">Note: '.$_SESSION['list(19)'].'</h4>';



            //var_dump($_SESSION);
        } else {
            echo '<h3 style="text-align: left; color:red">Lỗi</h3>';
        }
        //unset($_SESSION['list()']);
        session_destroy();
        ?>
    </div>
</div>
<hr>
<?php
//if (!empty($_GET['message'])){
//    $messageCode = $_GET['message'];
//    echo get_message($messageCode);
//}
?>
</body>
</html>