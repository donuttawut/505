<?php
require("dbconnect.php");
$std_id=$_GET["deletedid"];
$sql="DELETE FROM std_data WHERE std_id =$std_id";
$result=mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE DATA</title>
    </head>
    <body>
        <h3><?php if($result){
                        echo "ลบข้อมูลสำเร็จ";
                    }else{
                        echo "ลบข้อมูลไม่สำเร็จ กรุณาลงใหม่อีกครั้ง";
                    }
        ?></h3>
        <a class="btn btn-success btn-lg" href="index.php" role="button">กลับหน้าหลัก</a>
    </body>
</html>