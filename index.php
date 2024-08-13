<?php
require('dbconnect.php');
$sql = "SELECT * FROM std_data";
$result=mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STD DATA 2024</title>
</head>
<body>
    <div class="container">
            <h5>ข้อมูลนักเรียน ปีการศึกษา 2567</h5>     
            <a href="insertform.php">บันทึกข้อมูล</a>    

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ชื่อเล่น</th>
                        <th>อายุ</th>
                        <th>แก้ไขข้อมูล</th>
                        <th>ลบข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_assoc($result)){?>
                    <tr>
                    <td><?php echo $row["std_id"]; ?></td>
                        <td><?php echo $row["std_name"]; ?></td>
                        <td><?php echo $row["std_lname"]; ?></td>
                        <td><?php echo $row["std_nname"]; ?></td>
                        <td><?php echo $row["std_age"]; ?></td>
                        <td><center><a href="editform.php?id=<?php echo $row["std_id"];?>">แก้ไขข้อมูล</center></td>
                        <td><center>
                            <a href="delete.php?deletedid=<?php echo $row["std_id"];?>"
                            onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</center></td></center>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        </div>                
</body>
</html>
