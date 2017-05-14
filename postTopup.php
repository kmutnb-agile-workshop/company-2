<?php
require "./src/User";

   $user = new User();
   echo $user->topup($_POST['tel'],$_POST['amount']);
