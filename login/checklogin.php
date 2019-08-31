<?php
//DO NOT ECHO ANYTHING ON THIS PAGE OTHER THAN RESPONSE
//'true' triggers login success
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
include 'config.php';
require 'includes/functions.php';

// Define $myusername and $mypassword
$username = $_POST['myusername'];
$password = $_POST['mypassword'];

// To protect MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);

$response = '';
$loginCtl = new LoginForm;
$conf = new GlobalConf;
$lastAttempt = checkAttempts($username);
$max_attempts = $conf->max_attempts;


//First attempts
if ($lastAttempt['lastlogin'] == '') {
    

    $lastlogin = 'never';
    $loginCtl->insertAttempt($username);
    $response = $loginCtl->checkLogin($username, $password);

} elseif ($lastAttempt['attempts'] >= $max_attempts) {
    

    //Exceeded max attempts
    $loginCtl->updateAttempts($username);
    $response = $loginCtl->checkLogin($username, $password);

} else {


    $response = $loginCtl->checkLogin($username, $password);

};

if ($lastAttempt['attempts'] < $max_attempts && $response != 'true') {


    $loginCtl->updateAttempts($username);
    $resp = new RespObj($username, $response);
    $jsonResp = json_encode($resp);
    echo $jsonResp;

} else {
    

    $resp = new RespObj($username, $response);
    $jsonResp = json_encode($resp);
    //http_redirect(); 
    header('location:../grid/grid.php');
    //echo $jsonResp;

}

unset($resp, $jsonResp);
ob_end_flush();
