<?php
require('dbconnect.php');
$sql = "SELECT * FROM std_data";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "ID =".$row["std_id"]."<br>";
    echo "ชื่อ =".$row["std_name"]."<br>";
    echo "นามสกุล =".$row["std_lname"]."<br>";
    echo "ชื่อเล่น =".$row["std_nname"]."<br>";
    echo "อายุ =".$row["std_age"]."<br>";
}

?>