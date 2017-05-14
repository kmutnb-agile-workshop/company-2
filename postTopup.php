<?php
ob_start();
session_start();
require 'vendor/autoload.php';

// init flag
$action = 'add';
$isSuccess = false;

// get data from POST param
$customerId = isset($_POST['customerId']) ? $_POST['customerId'] : '';
$customerName = $_POST['customerName'];
