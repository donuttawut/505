<?php
// เชื่อมต่อฐานข้อมูล
require('dbconnect.php');
// รับค่าที่ส่งมาจากฟอร์มลงในตัวแปร
$std_name=$_POST["std_name"];
$std_lname=$_POST["std_lname"];
$std_nname=$_POST["std_nname"];
$std_age=$_POST["std_age"];
//บันทึกข้อมูล
$sql="INSERT INTO std_data(std_name,std_lname,std_nname,std_age) VALUES('$std_name','$std_lname','$std_nname','$std_age')";
$result=mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT DATA</title>
</head>
<body>
                    <h3><?php if($result){
                        echo "บันทึกข้อมูลสำเร็จ";
                    }else{
                        echo "บันทึกข้อมูลไม่สำเร็จ กรุณาลงใหม่อีกครั้ง";
                    }
                    ?></h3>
                        <center>
                            <a class="btn btn-primary btn-lg" href="insertform.php" role="button">เพิ่มข้อมูล</a>
                            <a class="btn btn-success btn-lg" href="index.php" role="button">กลับหน้าหลัก</a>
                        </center>
</body>
</html>
