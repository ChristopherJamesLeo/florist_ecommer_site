<?php
    include "./config.php";
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $email = $_REQUEST["email"];
    #$password = md5($_REQUEST["password"]);
    $password = $_REQUEST["password"];
    $role = $_REQUEST["role"];
    $phonenumber = $_REQUEST["phonenumber"];
    $city = $_REQUEST["city"];
    $address1= $_REQUEST["str-address"];
    $address2 = $_REQUEST["apart-address"];
    $country = $_REQUEST["country"];
    $postcode = $_REQUEST["postcode"];
    $imgname = $_FILES["userimg"]["name"];

    $fileDir = "../assets/imgs/profile_pic/";
    $filetemp = $_FILES["userimg"]["tmp_name"];
    $targetFilePath = $fileDir . $imgname;
    $fileType = pathinfo($targetFilePath , PATHINFO_EXTENSION);

    if(!empty($imgname)){
        if(move_uploaded_file($filetemp,$targetFilePath)){
            $sql = "INSERT INTO users (firstname,lastname,role,email,password,phonenumber,user_img,city,country,address1,address2,postcode) VALUES ('{$firstname}','{$lastname}',{$role},'{$email}','{$password}','{$phonenumber}','{$imgname}','{$city}','{$country}','{$address1}','{$address2}','{$postcode}')";
            $result = mysqli_query( $conn , $sql);
        }
    };
    header("location:http://localhost/florist_site(p-18)/index.php");
    mysqli_close($conn);
?>