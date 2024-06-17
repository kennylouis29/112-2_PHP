<meta charset = 'utf8'>

<?php

$sNo = $_POST["No"];
$sName = $_POST["Name"];
$sId = $_POST["Id"];
$sDepartment = $_POST["Department"];

$link = @mysqli_connect(
    'localhost', 
    'root', 
    '', 
    'gathering'); 

$SQL = "UPDATE gathering SET Name = '$sName', Id = '$sId', Department = '$sDepartment' WHERE No = '$sNo'";
if($result = mysqli_query($link, $SQL)){
    echo "update completed";
}
echo "<br/><a href = 'index.php'>View database information</a>";
?>