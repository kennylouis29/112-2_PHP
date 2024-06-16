<?php
ob_start();
session_start();
?>

<meta charset="utf-8">
<?php
$sId="Chair";
$sPwd="123";

$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];

if($sId==$uId && $sPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:chair.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

ob_flush();
?>