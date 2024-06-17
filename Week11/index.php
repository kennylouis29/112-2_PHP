<meta charset = 'utf-8'>

<?php

$link = @mysqli_connect(
            'localhost',
            'root', 
            '', 
            'gathering'); 

if (!$link)
        die("Unable to open database!<br/>");
else
        echo "Database: opened successfully!<br/>";

$SQL = "SELECT * FROM gathering";

$result = mysqli_query($link, $SQL);

echo "<table border = '1'>";
while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Id"]."</td><td>".$row["Department"]."</td><td><a href = 'del.php?sNo=".$row["No"]."'>刪除</a></td><td>修改</td>";
        echo "</tr>";
}
echo "</table";

mysqli_close($link);
?>