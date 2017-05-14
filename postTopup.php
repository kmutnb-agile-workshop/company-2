<?php
require "./src/User.php";

   $user = new User();
   $user->topup($_POST['tel'],$_POST['amount']);
