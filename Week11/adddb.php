<meta charset = 'utf-8'>

<?php

$sName = $_POST["Name"];
$sId = $_POST["Id"];
$sDepartment = $_POST["Department"];

$link = @mysqli_connect(
    'localhost', 
    'root', 
    '', 
    'gathering'); 

$SQL = "INSERT INTO gathering(Name, Id, Department) VALUES('$sName','$sId','$sDepartment')";

if($result = mysqli_query($link, $SQL)){
    echo "<br/>added successfully";
}
echo "<br/><a href = 'index.php'>View database information</a>"
?>