<?php
    session_start();
    error_reporting(0);
    include('includes/config.php');
    
    if($_SESSION['login']){
        $bkid=intval($_GET['bkid']);
        $pkgid=intval($_GET['pkgid']);
        $user_email = $_SESSION['login'];
        //delete a record from booking to clear the cart
        $sql_del = "DELETE FROM tblbooking WHERE BookingId =:bookingid AND PackageId = :packageid AND UserEmail = :user_email";
        $query_del = $dbh->prepare($sql_del);
        $query_del->bindParam(':bookingid',$bkid,PDO::PARAM_INT);
        $query_del->bindParam(':packageid',$pkgid,PDO::PARAM_INT);
        $query_del->bindParam(':user_email',$user_email,PDO::PARAM_STR);
        $result_del = $query_del->execute();

        if($result_del){
            //echo "<script>alert('Packaged removed from the cart successfully!')";
            $msg = "Package removed from the cart successfully!";
        }else{
            //echo "<script>alert('ooops! Something went wrong. Try again later.')";
            $error = "ooops! Something went wrong while removing the packgage. Try again later.";
        }

        header("Location: cart.php?msg=$msg&&error=$error");
    }
?>