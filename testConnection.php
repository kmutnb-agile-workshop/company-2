<?php
require "./src/DbConnection.php";
    $db = DbConnection::getConnection();
    $rs = $db->Execute("SELECT * from user");
    foreach($rs as $item){
    	echo $item[1];
    }
