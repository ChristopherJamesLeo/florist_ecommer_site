<?php
    include "./config.php";

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $comment = $_REQUEST["comment"];

    $sql = "INSERT INTO blogs (name, email,comments) VALUES ('{$name}','{$email}','{$comment}')";
    $result = mysqli_query( $conn , $sql);

    // header("location:http://localhost/florist_site(p-18)/contactus.php");
    mysqli_close( $conn );
?>