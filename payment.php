<?php
$json = $_POST['payment_json'];
$payment_json = json_decode($json,true);
echo($payment_json);
?>