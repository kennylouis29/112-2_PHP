<meta charset = 'utf-8'>

<?php

$sNo = $_GET["sNo"];
echo $sNo;

$link = @mysqli_connect(
    'localhost', 
    'root', 
    '', 
    'gathering');

$SQL = "DELETE FROM gathering WHERE No = '$sNo'";

if($result = mysqli_query($link, $SQL)){
    echo "<br/>successfully deleted";
}
echo "<br/><a href = 'index.php'>View database information</a>"
?>