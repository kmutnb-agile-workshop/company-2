<?php
require "./src/User";

   $user = new User();
   $user->topup($_POST['tel'],$_POST['amount']);
