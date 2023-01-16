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
</head>
<body>
<?php
// khai báo biến


// kiểm tra xem có dữ liệu không
if (isset ( $_POST ['firstName'] )) {
    $firstName = $_POST ['firstName'];
}
if (isset ( $_POST ['email'] )) {
    $email = $_POST ['email'];
}
if (isset ( $_POST ['phoneNumber'] )) {
    $phoneNumber = $_POST ['phoneNumber'];
}
if (isset ( $_POST ['address1'] )) {
    $address1 = $_POST ['address1'];
}
if (isset ( $_POST ['address2'] )) {
    $address2 = $_POST ['address1'];
}
if (isset ( $_POST ['address1'] )) {
    $address1 = $_POST ['address1'];
}
if (isset ( $_POST ['address1'] )) {
    $address1 = $_POST ['address1'];
}
if (isset ( $_POST ['address1'] )) {
    $address1 = $_POST ['address1'];
}
if (isset ( $_POST ['address1'] )) {
    $address1 = $_POST ['address1'];
}
if (isset ( $_POST ['address1'] )) {
    $address1 = $_POST ['address1'];
}



?>
<div class="container">
    <header>
        <div class="p-5 text-center bg-secondary">
            <h1 class="text-white">Hotel Guest Registration Form</h1>
        </div>
    </header>
    <form action="connect.php" method="post">
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Name</label>
                <input type="text" class="form-control"  placeholder=" " name="firstName" >
                <small id="firstName" class="form-text text-muted">First Name</small>
            </div>
            <div class="form-group col-sm">
                <label class="text-white" for="LName">LastName</label>
                <input type="text" class="form-control"   placeholder=" " name="lastName">
                <small id="lastName" class="form-text text-muted">Last Name</small>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="InputEmail1">Email</label>
                <input type="email" class="form-control"  placeholder=" " name="email">
                <small id="Email" class="form-text text-muted">Example@Example.com</small>
            </div>
            <div class="form-group col-sm">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" class="form-control"   placeholder="(000)000-0000" name="phoneNumber">
                <small id="PhoneNumber" class="form-text text-muted">Please enter a valid phone number.</small>
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <label for="DiaChi">Address</label>
                <input type="text" class="form-control" id="DiaChi" placeholder="" name="address1">
                <small id="DiaChi" class="form-text text-muted">Street Address</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="DiaChi" placeholder="" name="address2">
                <small id="DiaChi" class="form-text text-muted">Street Address Line 2</small>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control"  placeholder=" " name="city">
                    <small id="City" class="form-text text-muted">City</small>
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control"   placeholder=" " name="state" >
                    <small id="State" class="form-text text-muted">State / Province</small>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"   placeholder=" " name="postal">
                <small id="Postal " class="form-text text-muted">Postal / Zip Code</small>
            </div>
        </div>
        <h1>Booking Infomation</h1>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Check-in Date</label>
                <input type="date" class="form-control"  placeholder=" " name="checkInDate">
                <small id="indate" class="form-text text-muted">Date</small>
            </div>
            <div class="form-group col-sm">
                <label for="LName">Check-out Date</label>
                <input type="date" class="form-control"   placeholder=" " name="checkOutDate">
                <small id="outdate" class="form-text text-muted">Date</small>
            </div>
        </div>
        <div class="">
            <div class="form-group">
                <label for="LName">Pick-up Location</label>
                <input type="location" class="form-control"   placeholder=" " name="bookAddress1">
                <small id="outdate" class="form-text text-muted">Street Address</small>
            </div>
            <div class="form-group">
                <input type="location" class="form-control"   placeholder=" " name="bookAddress2">
                <small id="outdate" class="form-text text-muted">Street Address Line 2</small>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control"  placeholder=" " name="bookCity">
                    <small id="City" class="form-text text-muted">City</small>
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control"   placeholder=" " name="bookState" >
                    <small id="State" class="form-text text-muted">State / Province</small>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"   placeholder=" " name="bookPostal" >
                <small id="Postal " class="form-text text-muted">Postal / Zip Code</small>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm">
                <label for="Name">Room Type</label>
                <select class="form-select form-control" >
                    <option selected>Please select</option>
                    <option name="roomType" value="to">To</option>
                    <option name="roomType" value="nho">Nhỏ</option>
                    <option name="roomType" value="vua">Vừa</option>
                </select>
            </div>
            <div class="form-group col-sm">
                <label for="Name">Smoking</label>
                <select class="form-select form-control" >
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