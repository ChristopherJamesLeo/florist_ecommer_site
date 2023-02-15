<?php
    include "./config.php";
    session_start();
    $getCarts = json_decode($_POST["getCarts"],true);

    foreach($getCarts as $getCart){
        $pid = $getCart["pid"];
        

        $usql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";
        $uresult = mysqli_query( $conn , $usql );

        $psql = "SELECT * FROM products WHERE id = {$pid}";
        $presult = mysqli_query( $conn , $psql);

        if(mysqli_num_rows($uresult)){
            while($urow = mysqli_fetch_assoc($uresult)){
                // print_r($urow);
                if(mysqli_num_rows($presult)){
                    while($prow = mysqli_fetch_assoc($presult)){
                        // print_r($prow);
                        echo $pquantity = $getCart["quantity"];
                        $userId = $urow["id"];
                        $username = $urow["firstname"] . $urow["lastname"];
                        $pid = $prow["id"];
                        $pname = $prow["name"];
                        $pcategories = $prow["categories"];
                        $pprice = $prow["price"];
                        $prating = $prow["rating"];
                        $pimg1 = $prow["product_img1"];
                        $pimg2 = $prow["product_img2"];
                        $pdescription = $prow["description"];

                        $sql = "INSERT INTO orders (p_id,user_id,user_name,amount,p_name,price,categories,rating,product_img1,product_img2,description) VALUES({$pid},{$userId},'{$username}','{$pquantity}','{$pname}',{$pprice},'{$pcategories}',{$prating},'{$pimg1}','{$pimg2}','{$pdescription}')";
                        $result = mysqli_query( $conn , $sql);
                    }
                }
                
            }
        }
    }
    
    mysqli_close( $conn );
?>


    
