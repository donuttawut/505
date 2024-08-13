<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');
// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$std_id=$_POST["std_id"];
$std_name=$_POST["std_name"];
$std_lname=$_POST["std_lname"];
$std_nname=$_POST["std_nname"];
$std_age=$_POST["std_age"];
//แก้ไขข้อมูล
$sql="UPDATE std_data SET std_name ='$std_name', std_lname ='$std_lname', std_nname ='$std_nname', std_age ='$std_age' WHERE std_id = $std_id";
$result=mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>UPDATE DATA</title>
    </head>
    <body>
        <h3>
            <?php if($result){
                        echo "แก้ไขข้อมูลสำเร็จ";
                    }else{
                        echo "แก้ไขข้อมูลไม่สำเร็จ กรุณาลงใหม่อีกครั้ง";
                    }
            ?>
        </h3>
        <center><a class="btn btn-success btn-lg" href="index.php" role="button">กลับหน้าหลัก</a></center>
    </body>
</html>
