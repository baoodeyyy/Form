<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </script>
    <style>
        .size{
            height: 200px;
            width: 48.5%;
        }
    </style>
</head>
<body>
<?php
// require sang file function.php
require_once 'function.php';
// khai báo mảng chứa lỗi
$errors = [];

// validate fisrtName
session_start();
$_SESSION['list'] = array(

);
if (empty($_POST['firstName'])){
    $errors['firstName'] = "Tên không được để trống";
}else if (strlen($_POST['firstName'])<"2"){
        $errors['firstName'] = "Tên phải lớn hơn 2 ký tự";
}else{
        $firstName = $_POST['firstName'];
        $_SESSION['list(0)'] = $_POST['firstName'];
}

// validate lastName
if (empty($_POST['lastName'])){
    $errors['lastName'] = "Tên không được để trống";
}else if (strlen($_POST['lastName'])<"2"){
    $errors['lastName'] = "Tên phải lớn hơn 2 ký tự";
}else{
    $lastName = $_POST['lastName'];
    $_SESSION['list(1)'] = $_POST['lastName'];
}
//var_dump($_SESSION['list']);die;
// validate email
if (isset($_POST['email'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = "email không được để trống";
    }else{
        $email = $_POST['email'];
        $_SESSION['list(2)'] = $_POST['email'];
    }
}
// validate phonenumber
if (isset($_POST['phoneNumber'])){
    $phone = $_POST['phoneNumber'];
    $regex = '/[0-9]{10}/';
    $found = preg_match($regex, $phone);
    if (empty($_POST['phoneNumber'])){
        $errors['phoneNumber'] = "phoneNumber không được để trống";
    }else{
        if(!$found) {
            $errors =  "phoneNumber không hợp lệ";
        }else{
            $phoneNumber = $_POST['phoneNumber'];
            $_SESSION['list(3)'] = $_POST['phoneNumber'];
        }
    }
}

// validate address
if (empty($_POST['address1'])){
    $errors['address1'] = "Address không được để trống";
}else{
    $address1 = $_POST['address1'];
    $_SESSION['list(4)'] = $_POST['address1'];
}

// validate address 2
if (empty($_POST['address2'])){
    $errors['address2'] = "Address không được để trống";
}else{
    $address2 = $_POST['address2'];
    $_SESSION['list(5)'] = $_POST['address2'];
}

// validate city
if (empty($_POST['city'])){
    $errors['city'] = "city không được để trống";
}else{
    $city = $_POST['city'];
    $_SESSION['list(6)'] = $_POST['city'];
}

// validate state province
if (empty($_POST['state'])){
    $errors['state'] = "state/province không được để trống";
}else{
    $state = $_POST['state'];
    $_SESSION['list(7)'] = $_POST['state'];
}

// validate postal/zipcode
if (isset($_POST['postal'])){
    $pos = $_POST['postal'];
    $reg = '/[0-9]{5}/';
    $found1 = preg_match($reg, $pos);
    if (empty($_POST['postal'])){
        $errors['postal'] = "postal không được để trống";
    }else{
        if(!$found1) {
            $errors =  "postal không hợp lệ";
        }else{
            $postal = $_POST['postal'];
            $_SESSION['list(8)'] = $_POST['postal'];

            //var_dump($postal);

        }
    }
}



// validate dateIn
if (isset($_POST['checkInDate'])){
    if (empty($_POST['checkInDate'])){
        $errors['checkInDate'] = "bạn cần nhập ngày tháng";
    }else{
        $checkInDate = $_POST['checkInDate'];
        //var_dump($checkInDate);die;
        $_SESSION['list(9)'] = $_POST['checkInDate'];
    }
}


// validate dateOut
if (isset($_POST['checkOutDate'])){
    if (empty($_POST['checkOutDate'])){
        $errors['checkOutDate'] = "bạn cần nhập ngày tháng";
    }else{
        $checkOutDate = $_POST['checkOutDate'];
        $_SESSION['list(10)'] = $_POST['checkOutDate'];
        //var_dump($checkOutDate);die;
    }
}



// validate pickup location
if (isset($_POST['bookAddress1'])){
    if (empty($_POST['bookAddress1'])){
        $errors['bookAddress1'] = "địa chỉ không được để trống";
    }else{
        $bookAddress1 = $_POST['bookAddress1'];
        $_SESSION['list(11)'] = $_POST['bookAddress1'];
    }
}

// validate pickup location2
if (empty($_POST['bookAddress2'])){
    $errors['bookAddress2'] = "địa chỉ không được để trống";
}else{
    $bookAddress2 = $_POST['bookAddress2'];
    $_SESSION['list(12)'] = $_POST['bookAddress2'];
}

// validate city booking
if (empty($_POST['bookCity'])){
    $errors['bookCity'] = "city không được để trống";
}else{
    $bookCity = $_POST['bookCity'];
    $_SESSION['list(13)'] = $_POST['bookCity'];
}

 //validate state/province booking
if (empty($_POST['bookState'])){
    $errors['bookState'] = " bạn cần nhập thông tin này";
}else{
    $bookState = $_POST['bookState'];
    $_SESSION['list(14)'] = $_POST['bookState'];
}

//validate postal
if (isset($_POST['bookPostal'])){
    $pos1 = $_POST['bookPostal'];
    $reg1 = '/[0-9]{5}/';
    $found1 = preg_match($reg1, $pos1);
    if (empty($_POST['bookPostal'])){
        $errors['bookPostal'] = "postal không được để trống";
    }else{
        //$postal = $_POST['postal'];
        if(!$found1) {
            $errors =  "postal không hợp lệ";
        }else{
            $bookPostal = $_POST['bookPostal'];
            $_SESSION['list(15)'] = $_POST['bookPostal'];
        }
        //var_dump($bookPostal);
    }
}

// validate roomtype
if (isset($_POST['roomType'])){
   // var_dump($_POST['roomType']);die;
    if(isset($_REQUEST['roomType']) && $_REQUEST['roomType'] == '0') {
        $errors['roomType'] = "Bạn vui lòng chọn loại phòng";
    }else{
        $roomType = $_POST['roomType'];
        $_SESSION['list(16)'] = $_POST['roomType'];
    }
}

// validate smoking
if (isset($_POST['smoke'])){
    if(isset($_REQUEST['smoke']) && $_REQUEST['smoke'] == '0') {
        $errors['smoke'] = "bạn có hút thuốc không?";
    }else{
        $smoke = $_POST['smoke'];
        $_SESSION['list(17)'] = $_POST['smoke'];
        //var_dump($smoke);die;
    }
}

// validate số người
if (empty($_POST['ofGuest'])){
    $errors['ofGuest'] = "vui lòng nhập số người";
}else{
    $ofGuest = $_POST['ofGuest'];
    $_SESSION['list(18)'] = $_POST['ofGuest'];
}
if (isset($_POST['note'])){
    $note = $_POST['note'];
    $_SESSION['list(19)'] = $_POST['note'];
}

if (empty($errors)){
    echo "validate thành công";
}else{
    echo "validate không thành công";
}
 var_dump($errors);

if (empty($errors)){
    redirect('list.php?message=1');
    exit;
}else{

}


?>


<div class="container">
    <header>
        <div class="p-5 text-center bg-secondary">
            <h1 class="text-white">Hotel Guest Registration Form</h1>
        </div>
    </header>
    <form action="#" method="POST">
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Name</label>
                <input type="text" class="form-control"  placeholder=" " name="firstName" >
                <small id="firstName" class="form-text text-muted">First Name</small>
                <?php
                if (isset($errors['firstName'])) {
                    echo '<span style="color: red">'.$errors['firstName'].'</span>';
                }
                ?>

            </div>
            <div class="form-group col-sm">
                <label class="text-white" for="LName">LastName</label>
                <input type="text" class="form-control"   placeholder=" " name="lastName">
                <small id="lastName" class="form-text text-muted">Last Name</small>
                <?php
                if (isset($errors['lastName'])) {
                    echo '<span style="color: red">'.$errors['lastName'].'</span>';
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
                if (isset($errors['email'])) {
                    echo '<span style="color: red">'.$errors['email'].'</span>';
                }
                ?>
            </div>
            <div class="form-group col-sm">
                <label for="">Phone Number</label>
                <input type="text" class="form-control"   placeholder="(000)000-0000" name="phoneNumber">
                <small id="PhoneNumber" class="form-text text-muted">Please enter a valid phone number.</small>
                <?php
                if (isset($errors['phoneNumber'])) {
                    echo '<span style="color: red">'.$errors['phoneNumber'].'</span>';
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
                if (isset($errors['address1'])) {
                    echo '<span style="color: red">' . $errors['address1'] . '</span>';
                }
                ?>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="DiaChi" placeholder="" name="address2">
                <small id="DiaChi" class="form-text text-muted">Street Address Line 2</small>
                <?php
                if (isset($errors['address2'])) {
                    echo '<span style="color: red">' . $errors['address2'] . '</span>';
                }
                ?>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control"  placeholder=" " name="city">
                    <small id="City" class="form-text text-muted">City</small>
                    <?php
                    if (isset($errors['city'])) {
                        echo '<span style="color: red">' . $errors['city'] . '</span>';
                    }
                    ?>
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control"   placeholder=" " name="state" >
                    <small id="State" class="form-text text-muted">State / Province</small>
                    <?php
                    if (isset($errors['state'])) {
                        echo '<span style="color: red">' . $errors['state'] . '</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"   placeholder=" " name="postal">
                <small id="Postal " class="form-text text-muted">Postal / Zip Code</small>
                <?php
                if (isset($errors['postal'])) {
                    echo '<span style="color: red">' . $errors['postal'] . '</span>';
                }
                ?>
            </div>
        </div>
        <h1>Booking Information</h1>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Check-in Date</label>
                <input type="date" class="form-control"  placeholder=" " name="checkInDate" min="<?php echo date('Y-m-d'); ?>"/>
                <small id="indate" class="form-text text-muted">Date</small>
                <?php
                if (isset($errors['checkInDate'])) {
                    echo '<span style="color: red">' . $errors['checkInDate'] . '</span>';
                }
                ?>
            </div>
            <div class="form-group col-sm">
                <label for="LName">Check-out Date</label>
                <input type="date" class="form-control"   placeholder=" " name="checkOutDate" min="<?php echo date('Y-m-d');?>"/>
                <small id="outdate" class="form-text text-muted">Date</small>
                <?php
                if (isset($errors['checkOutDate'])) {
                    echo '<span style="color: red">' . $errors['checkOutDate'] . '</span>';
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
                if (isset($errors['bookAddress1'])) {
                    echo '<span style="color: red">' . $errors['bookAddress1'] . '</span>';
                }
                ?>
            </div>
            <div class="form-group">
                <input type="location" class="form-control"   placeholder=" " name="bookAddress2">
                <small id="outdate" class="form-text text-muted">Street Address Line 2</small>
                <?php
                if (isset($errors['bookAddress2'])) {
                    echo '<span style="color: red">' . $errors['bookAddress2'] . '</span>';
                }
                ?>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control"  placeholder=" " name="bookCity">
                    <small id="City" class="form-text text-muted">City</small>
                    <?php
                    if (isset($errors['bookCity'])) {
                        echo '<span style="color: red">' . $errors['bookCity'] . '</span>';
                    }
                    ?>
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control"   placeholder=" " name="bookState" >
                    <small id="State" class="form-text text-muted">State / Province</small>
                    <?php
                    if (isset($errors['bookState'])) {
                        echo '<span style="color: red">' . $errors['bookState'] . '</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"   placeholder=" " name="bookPostal" >
                <small id="Postal " class="form-text text-muted">Postal / Zip Code</small>
                <?php
                if (isset($errors['bookPostal'])) {
                    echo '<span style="color: red">' . $errors['bookPostal'] . '</span>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Room Type</label>
                <select class="form-select form-control" name="roomType">
                    <option selected value="0">Please select</option>
                    <option name="roomType" value="1">To</option>
                    <option name="roomType" value="2">Nhỏ</option>
                    <option name="roomType" value="3">Vừa</option>
                </select>
                <?php
                if (isset($errors['roomType'])) {
                    echo '<span style="color: red">' . $errors['roomType'] . '</span>';
                }
                ?>
            </div>
            <div class="form-group col-sm">
                <label for="Name">Smoking</label>
                <select class="form-select form-control" name="smoke">
                    <option selected value="0">Please select</option>
                    <option name="smoking" value="1">Yes</option>
                    <option name="smoking" value="2">No</option>
                </select>
                <?php
                if (isset($errors['smoke'])) {
                    echo '<span style="color: red">' . $errors['smoke'] . '</span>';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">#of Guests</label>
                <input type="text" class="form-control"  placeholder="e.g.,4" name="ofGuest" >
                <?php
                if (isset($errors['ofGuest'])) {
                    echo '<span style="color: red">' . $errors['ofGuest'] . '</span>';
                }
                ?>
            </div>
            <div class="form-group col-sm" >
                <!--                    <input type="text" class="form-control"   placeholder=" " value="--><!--">-->
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
                <button class="btn btn-secondary" role="button" name="btnreg" >
                    <link rel="stylesheet" href="list.php">Register</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>