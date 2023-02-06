<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .size{
            height: 200px;
            width: 48.5%;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="C:\xampp\htdocs\Form\Form\js.js"></script>
</head>
<body>
<?php
require_once 'function.php';
// khai báo mảng chứa lỗi
$errors = [];
$success = [];
if ($_SERVER['REQUEST_METHOD']=='POST'){

    // validate firstName
    if (empty(trim($_POST['firstName']))){
        $errors['firstName']['required'] = 'First Name không được để trống';
    }else{
        if (strlen(trim($_POST['firstName']))<=2){
            $errors['firstName']['min'] = 'First Name phải lớn hơn 2 ký tự';
        }
    }

    // validate lastname
    if (empty(trim($_POST['lastName']))){
        $errors['lastName']['required'] = 'Last Name không được để trống';
    }else{
        if (strlen(trim($_POST['lastName']))<=2){
            $errors['lastName']['min'] = 'Last Name phải lớn hơn 2 ký tự';
        }
    }

    // validate Email
    if (empty(trim($_POST['email']))){
        $errors['email']['required'] = 'Email không được để trống';
    }else if(filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL)){
        $success['email']['valid'] = 'Email hợp lệ';
    }else{
        $errors['email']['invalid'] = 'Email không hợp lệ';
    }


    // validate Phone Number
    if (empty(trim($_POST['phoneNumber']))){
        $errors['phoneNumber']['required'] = 'Phone Number không được để trống';
    }else if(!strlen($_POST['phoneNumber'])<="10" && strlen($_POST['phoneNumber'])>"9"){
        $errors['phoneNumber']['invalid'] = 'Phone Number không hợp lệ';
    }

    // validate address1
    if (empty(trim($_POST['address1']))){
        $errors['address1']['required'] = 'Address không được để trống';
    }

    // validate address2
    if (empty(trim($_POST['address2']))){
        $errors['address2']['required'] = 'Address không được để trống';
    }

    // validate city
    if (empty(trim($_POST['city']))){
        $errors['city']['required'] = 'City không được để trống';
    }

    // validate State
    if (empty(trim($_POST['state']))){
        $errors['state']['required'] = 'State không được để trống';
    }

    // validate Postal code
    if (empty(trim($_POST['postal']))){
        $errors['postal']['required'] = 'postal không được để trống';
    }else if(!strlen($_POST['postal'])>"5" && strlen($_POST['postal'])<"7"){
        $errors['postal']['invalid'] = 'postal không hợp lệ';
    }



    // validate date
    if (empty($_POST['checkInDate'])){
        $errors['checkInDate']['required'] = 'Ngày không được để trống';
    }
    if (empty($_POST['checkOutDate'])){
        $errors['checkOutDate']['required'] = 'Ngày không được để trống';
    }

    // validate bookAddress1
    if (empty(trim($_POST['bookAddress1']))){
        $errors['bookAddress1']['required'] = 'Address không được để trống';
    }

    // validate bookAddress2
    if (empty(trim($_POST['bookAddress2']))){
        $errors['bookAddress2']['required'] = 'Address không được để trống';
    }

    // validate book city
    if (empty(trim($_POST['bookCity']))){
        $errors['bookCity']['required'] = 'City không được để trống';
    }

    // validate book state
    if (empty(trim($_POST['bookState']))) {
        $errors['bookState']['required'] = 'State không được để trống';
    }

    // validate book postal
    if (empty(trim($_POST['bookPostal']))){
        $errors['bookPostal']['required'] = 'postal không được để trống';
    }else if(!strlen($_POST['postal'])>"5" && strlen($_POST['postal'])<"7"){
        $errors['bookPostal']['invalid'] = 'postal không hợp lệ';
    }

    // validate roomtype
//    if (empty(trim($_POST['roomType']))) {
//        $errors['roomType']['required'] = 'vui lòng chọn loại phòng';
//    }
//
//    // validate smoke
//    if (empty(trim($_POST['smoke']))) {
//        $errors['smoke']['required'] = 'bạn có hút thuốc không???';
//    }

    // validate ofGuest
    if (empty(trim($_POST['ofGuest']))) {
        $errors['ofGuest']['required'] = 'số người không được để trống';
    }else{
        if (filter_var(trim($_POST['ofGuest']), FILTER_VALIDATE_INT, [
                'options' => ['min_range' =>  1]
        ])){
            $errors['ofGuest']['required'] = 'số người không hợp lệ';
        }
    }

    if (empty($errors)){
        redirect(('list.php?message=1'));
    }else{
     echo "validate không thành công<br/>";
        //redirect(('kothanhcong.php?message=2'));
    }

    var_dump($errors);
//    echo '<pre>';
//    print_r($errors);
//    echo '<pre>';

}
?>
<div class="container">
    <header>
        <div class="p-5 text-center bg-secondary">
            <h1 class="text-white">Hotel Guest Registration Form</h1>
        </div>
    </header>
    <form action="" method="post">
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Name</label>
                <input type="text" class="form-control"  placeholder=" " name="firstName" >
                <small id="firstName" class="form-text text-muted">First Name</small>
                <?php
                if(!empty($errors['firstName']['required'])){
                    echo '<span style="color: red">'.$errors['firstName']['required'].'</span>';
                }else{
                    if(!empty($errors['firstName']['min'])){
                        echo '<span style="color: red">'.$errors['firstName']['min'].'</span>';
                    }
                }
                ?>

            </div>
            <div class="form-group col-sm">
                <label class="text-white" for="LName">LastName</label>
                <input type="text" class="form-control"   placeholder=" " name="lastName">
                <small id="lastName" class="form-text text-muted">Last Name</small>
                <?php
                if(!empty($errors['lastName']['required'])){
                    echo '<span style="color: red">'.$errors['lastName']['required'].'</span>';
                }else{
                    if(!empty($errors['lastName']['min'])){
                        echo '<span style="color: red">'.$errors['lastName']['min'].'</span>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="InputEmail1">Email</label>
                <input type="email" class="form-control"  placeholder=" " name="email">
                <small id="Email" class="form-text text-muted">Example@Example.com</small>
                <?php
                if (isset($errors)){
                    if(!empty($errors['email']['required'])){
                        echo '<span style="color: red">'.$errors['email']['required'].'</span>';
                    }else {
                        if (!empty($errors['email']['valid'])) {
                            echo '<span style="color: red">'. $success['email']['valid'] . '</span>';
                        } else {
                            echo '<span style="color: red">'.$errors['email']['invalid'].'</span>';
                        }
                    }
                }
                ?>
            </div>
            <div class="form-group col-sm">
                <label for="">Phone Number</label>
                <input type="text" class="form-control"   placeholder="(000)000-0000" name="phoneNumber">
                <small id="PhoneNumber" class="form-text text-muted">Please enter a valid phone number.</small>
                <?php
                if(!empty($errors['phoneNumber']['required'])){
                    echo '<span style="color: red">'.$errors['phoneNumber']['required'].'</span>';
                }else{
                        echo '<span style="color: red">'.$errors['phoneNumber']['invalid'].'</span>';
                }
                ?>
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <label for="DiaChi">Address</label>
                <input type="text" class="form-control" id="DiaChi" placeholder="" name="address1">
                <small id="DiaChi" class="form-text text-muted">Street Address</small>
                <?php
                if(!empty($errors['address1']['required'])){
                    echo '<span style="color: red">'.$errors['address1']['required'].'</span>';
                }
                ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="DiaChi" placeholder="" name="address2">
                <small id="DiaChi" class="form-text text-muted">Street Address Line 2</small>
                <?php
                if(!empty($errors['address2']['required'])){
                    echo '<span style="color: red">'.$errors['address2']['required'].'</span>';
                }
                ?>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control"  placeholder=" " name="city">
                    <small id="City" class="form-text text-muted">City</small>
                    <?php
                    if(!empty($errors['city']['required'])){
                        echo '<span style="color: red">'.$errors['city']['required'].'</span>';
                    }
                    ?>
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control"   placeholder=" " name="state" >
                    <small id="State" class="form-text text-muted">State / Province</small>
                    <?php
                    if(!empty($errors['state']['required'])){
                        echo '<span style="color: red">'.$errors['state']['required'].'</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"   placeholder=" " name="postal">
                <small id="Postal " class="form-text text-muted">Postal / Zip Code</small>
                <?php
                if(!empty($errors['postal']['required'])){
                    echo '<span style="color: red">'.$errors['postal']['required'].'</span>';
                }else{
                    echo '<span style="color: red">'.$errors['postal']['invalid'].'</span>';
                }
                ?>
            </div>
        </div>
        <h1>Booking Infomation</h1>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Check-in Date</label>
                <input type="date" class="form-control"  placeholder=" " name="checkInDate">
                <small id="indate" class="form-text text-muted">Date</small>
                <?php
                if(!empty($errors['checkInDate']['required'])){
                    echo '<span style="color: red">'.$errors['checkInDate']['required'].'</span>';
                }
                ?>
            </div>
            <div class="form-group col-sm">
                <label for="LName">Check-out Date</label>
                <input type="date" class="form-control"   placeholder=" " name="checkOutDate">
                <small id="outdate" class="form-text text-muted">Date</small>
                <?php
                if(!empty($errors['checkOutDate']['required'])){
                    echo '<span style="color: red">'.$errors['checkOutDate']['required'].'</span>';
                }
                ?>
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <label for="LName">Pick-up Location</label>
                <input type="location" class="form-control"   placeholder=" " name="bookAddress1">
                <small id="outdate" class="form-text text-muted">Street Address</small>
                <?php
                if(!empty($errors['bookAddress1']['required'])){
                    echo '<span style="color: red">'.$errors['bookAddress1']['required'].'</span>';
                }
                ?>
            </div>
            <div class="form-group">
                <input type="location" class="form-control"   placeholder=" " name="bookAddress2">
                <small id="outdate" class="form-text text-muted">Street Address Line 2</small>
                <?php
                if(!empty($errors['bookAddress2']['required'])){
                    echo '<span style="color: red">'.$errors['bookAddress2']['required'].'</span>';
                }
                ?>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control"  placeholder=" " name="bookCity">
                    <small id="City" class="form-text text-muted">City</small>
                    <?php
                    if(!empty($errors['bookCity']['required'])){
                        echo '<span style="color: red">'.$errors['bookCity']['required'].'</span>';
                    }
                    ?>
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control"   placeholder=" " name="bookState" >
                    <small id="State" class="form-text text-muted">State / Province</small>
                    <?php
                    if(!empty($errors['bookState']['required'])){
                        echo '<span style="color: red">'.$errors['bookState']['required'].'</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"   placeholder=" " name="bookPostal" >
                <small id="Postal " class="form-text text-muted">Postal / Zip Code</small>
                <?php
                if(!empty($errors['bookPostal']['required'])){
                    echo '<span style="color: red">'.$errors['bookPostal']['required'].'</span>';
                }else if (!empty($errors['postal']['valid'])){
                    echo '<span style="color: green">'.$errors['bookPostal']['valid'].'</span>';
                }else{
                    echo '<span style="color: red">'.$errors['bookPostal']['invalid'].'</span>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Room Type</label>
                <select class="form-select form-control" name="roomType">
                    <option selected>Please select</option>
                    <option name="roomType" value="to">To</option>
                    <option name="roomType" value="nho">Nhỏ</option>
                    <option name="roomType" value="vua">Vừa</option>
                </select>
                <?php
                if(!empty($errors['roomType']['required'])){
                    echo '<span style="color: red">'.$errors['roomType']['required'].'</span>';
                }
                ?>
            </div>
            <div class="form-group col-sm">
                <label for="Name">Smoking</label>
                <select class="form-select form-control" name="smoke">
                    <option selected>Please select</option>
                    <option name="smoking" value="y">Yes</option>
                    <option name="smoking" value="n">No</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">#of Guests</label>
                <input type="text" class="form-control"  placeholder="e.g.,4" name="ofGuest" >
            </div>
            <div class="form-group col-sm" >
                <!--                    <input type="text" class="form-control"   placeholder=" " value="--><?php //// biến ?><!--">-->
                <!--                    <small id="State" class="form-text text-muted">State / Province</small>-->
            </div>
        </div>
        <div class="form-group">
            <label for="Name">Note</label>
            <input type="text" class="form-control size"  placeholder="" name="note">
        </div>
        <div class="container">
            <h4>The submission of this form makes a reservation for the type of room selected in the form.
                Any changes prior the scheduled occupancy should be communicated to us at least 24
                hours prior, which may be subject to availability of request.
            </h4>
            <br>
            <h4>
                Check-in time shall be at 2:00PM and checkout time shall be at 12:00NN.
            </h4>
            <div class="p-5 text-center">
                <button class="btn btn-secondary" role="button" name="btnreg">Register</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>