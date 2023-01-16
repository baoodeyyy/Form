<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal = $_POST['postal'];

$checkInDate = $_POST['checkInDate'];
$checkOutDate = $_POST['checkOutDate'];
//$PickUpLocation = $_POST['PickUpLocation'];
$bookAddress1 = $_POST['bookAddress1'];
$bookAddress2 = $_POST['bookAddress2'];
$bookCity = $_POST['bookCity'];
$bookState = $_POST['bookState'];
$bookPostal = $_POST['bookPostal'];
$roomType = $_POST['roomType'];
$smoking = $_POST['smoking'];
$ofGuest = $_POST['ofGuest'];
$note = $_POST['note'];


// database connection
$conn = new mysqli('localhost', 'root', '', 'form_reg');
if ($conn -> connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else {
    $stmt = $conn->prepare("inset into reg(firstName,lastName,email,phoneNumber,address1,address2,city,state,postal,checkInDate,checkOutDate,bookAddress1,bookAddress2,bookCity,bookState,bookPostal,roomType,smoking,ofGuest,note) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssissssissssssiiss",$firstName,$lastName,$email,$phoneNumber,$address1,$address2,$city,$state,$postal,$checkInDate,$checkOutDate,$bookAddress1,$bookAddress2,$bookCity,$bookState,$bookPostal,$roomType,$smoking,$ofGuest,$note);
    $stmt->execute();
    echo "reg successfully";
    $stmt->close();
    $conn->close();
}

