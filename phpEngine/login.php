<?php
    include "./config.php";
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $sql = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query( $conn , $sql );

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["firstname"].$row["lastname"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
        }
    }
    // echo $_SESSION["name"];
    header("location:http://localhost/florist_site(p-18)/");

    mysqli_close( $conn );
?>