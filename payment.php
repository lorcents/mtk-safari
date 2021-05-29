<?php
session_start();
include('includes/config.php');
if($_SESSION['login']){


$payment_details = $_POST['payment_json'];
$payment_json = json_decode($payment_details,true);
//variables
$id = $payment_json["id"];
$user_email = $_SESSION['login'];
$payer_email = $payment_json['payer_email'];
$payer_id = $payment_json['payer_id'];
$fname = $payment_json['fname'];
$lname = $payment_json['lname'];
$amount = $payment_json['amount'];
$status = $payment_json['status'];
$time = $payment_json['time'];

if($status == "COMPLETED"){
    $sql="Insert Into tblpayment(id,user_email,payer_email,payer_id,fname,lname,amount,status,time)Values(:id,:user_email,:payer_email,:payer_id,:fname,:lname,:amount,:status,:time)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':id',$id,PDO::PARAM_STR);
    $query->bindParam(':user_email',$user_email,PDO::PARAM_STR);
    $query->bindParam(':payer_email',$payer_email,PDO::PARAM_STR);
    $query->bindParam(':payer_id',$payer_id,PDO::PARAM_STR);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':lname',$lname,PDO::PARAM_STR);
    $query->bindParam(':amount',$amount,PDO::PARAM_INT);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->bindParam(':time',$time,PDO::PARAM_STR);
    $result = $query->execute();
    //$lastInsertId = $dbh->insert_id;
        if($result === TRUE){
        echo "Your payment was received Successfully!";
        }else{
        echo "Something went wrong.Please try again. Contact us for help";
        }
    }else{
        echo "Your payment was not completed";
    }
}
    /*foreach($payment_json as $x => $val){
        echo "$x = $val<br>";
    }*/
    //echo $user_email;
?>