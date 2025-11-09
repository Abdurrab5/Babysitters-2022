<?php
//connectoin with db
$db="babysitter";
$link= mysqli_connect("localhost", "root", "", $db);
 define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/babysitter/');
define('SITE_PATH','http://127.0.0.1/babysitter/');
 
define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'assets/image/');
 define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'assets/image/'); 
if(!$link){
	die(mysqli_error($link).mysqli_errno($link));
}
