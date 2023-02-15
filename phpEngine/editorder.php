<?php
    include "./config.php";
    session_start();
    // echo $_SESSION['id'];
    $odernote = $_REQUEST["odernote"];
    $paymethod = $_REQUEST["paymethod"];

    $usql = "SELECT * FROM orders WHERE user_id = {$_SESSION['id']}";
    $uresult = mysqli_query( $conn , $usql );

    if(mysqli_num_rows($uresult) > 0){
        while($urow = mysqli_fetch_assoc($uresult)){
            $sql = "UPDATE orders SET ordernote = '{$odernote}', paymethod = '{$paymethod}' WHERE user_id = {$_SESSION['id']};";
            $result = mysqli_query( $conn , $sql);
        }
    }
    header("location:http://localhost/florist_site(p-18)/index.php");
    mysqli_close($conn);

    
?>