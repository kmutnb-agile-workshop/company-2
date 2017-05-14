<?php
require "./src/DbConnection.php";
    $db = DbConnection::getConnection();
    $rs = $db->Execute("UPDATE user SET Balance = Balance + ".$_POST['amount']." WHERE Tel='".$_POST['tel']."'");
    if($rs){
    	echo " การเติมเงินเสร็จสมบูรณ์";
    }
