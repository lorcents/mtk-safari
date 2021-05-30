<?php
session_start();
if(!$_SESSION['login']){
    header("Location: index.php");

}else{
    include('includes/config.php');
if(isset ($_POST['payment_json'])){
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

    if($status === "COMPLETED"){
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
        
            if($result === TRUE){
                /*/Take info from booking table
                $sql_book = "SELECT 'PackageId' from tblbooking WHERE UserEmail ='$user_email' ";
                $query_book = $dbh->prepare($sql_book);
                $result_book = $query_book->execute();
                $results=$query_book->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query_book->rowCount() > 0){
                    foreach($results as $val){
                        //populate orders table
                        $_date =date("d/m/Y");
                        $sql_order="INSERT INTO tblorders(,packageid,paymentid,user_email,_date)VALUES(:packageid,:paymentid,:user_email,:_date)";
                        $query_order = $dbh->prepare($sql_order);
                        $query_order->bindParam(':packageid',$val->PackageId,PDO::PARAM_STR);
                        $query_order->bindParam(':paymentid',$payer_id,PDO::PARAM_STR);
                        $query_order->bindParam(':user_email',$user_email,PDO::PARAM_STR);
                        $query_order->bindParam(':_date',$_date,PDO::PARAM_STR);
                        $result_orders = $query_order->execute();
                    }
                    if($result_book && $result_orders === TRUE){
                        echo "Your payment was received Successfully!";
                    }
                }/*/
                echo "Your payment was received Successfully!";
            }else{
            echo "Something went wrong.Please try again. Contact us for help";
            }
        }else{
            echo "Your payment was not completed";
        }
    }else{
        header("Location: index.php"); 
    }
}
?>