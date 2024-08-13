<?php
require("dbconnect.php");
$std_id=$_GET["id"];
$sql="SELECT * FROM std_data WHERE std_id = $std_id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EDIT FORM</title>
    </head>
    <body>
        <h2>แบบฟอร์มแก้ไขข้อมูล</h>
            <form action="updatedata.php" method="POST">
                <input type="hidden" value="<?php echo $row["std_id"];?>" name="std_id">
                    <div>
                        <label for="">ชื่อ</label>
                        <input type="text" name="std_name" value="<?php echo $row["std_name"];?>" id="" >
                    </div>
                    <div>
                        <label for="">นามสกุล</label>
                        <input type="text" name="std_lname" value="<?php echo $row["std_lname"];?>" id="">
                    </div>
                    <div>
                        <label for="">ชื่อเล่น</label>
                        <input type="text" name="std_nname" value="<?php echo $row["std_nname"];?>" id="">
                    </div>
                    <div>
                        <label for="">อายุ</label>
                        <input type="number" name="std_age" value="<?php echo $row["std_age"];?>" id="">
                    </div>
                <span>กรุณาตรวจสอบข้อมูลให้ถูกต้อง ก่อนทำการยืนยันการแก้ไขข้อมูล</span>
                <div></div><button ontype="submit">ยืนยันการแก้ไขข้อมูล</button>
                <button><a href="index.php" role="button">ยกเลิก</a></button>
                <button><a href="index.php">กลับหน้าหลัก</a></button>
            </form>
    </body>
</html>