<?php
        //delete a record from booking to clear the cart
        $sql_del = "DELETE FROM tblbooking WHERE PackageId = :packageid AND UserEmail = :user_email";
        $query_del = $dbh->prepare($sql_del);
        $query_del->bindParam(':packageid',$result->pkgid,PDO::PARAM_INT);
        $query_del->bindParam(':user_email',$uemail,PDO::PARAM_STR);
        $result_del = $query_del->execute();
?>