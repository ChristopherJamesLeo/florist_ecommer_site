<?php
    include "./config.php";
    $email = $_REQUEST["email"];
    $message = $_REQUEST["contact-message"];

    $sql = "INSERT INTO contacts (email,message) VALUES ('{$email}','{$message}')";
    $result = mysqli_query( $conn , $sql);

    header("location:http://localhost/florist_site(p-18)/blog_detail.php");
    mysqli_close( $conn );
?>