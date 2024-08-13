<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>บันทึกการขอใช้งบประมาณ โรงเรียนร้อยเอ็ดวิทยาลัย</title>
    </head>
    <body>
        <h2>แบบฟอร์มบันทึกข้อมูล</h>
            <form action="insertdata.php" method="POST">
                <div>
                    <label for="">ชื่อ</label>
                    <input type="text" name="std_name" id="">
                </div>
                <div>
                    <label for="">นามสกุล</label>
                    <input type="text" name="std_lname" id="">
                </div>
                <div>
                    <label for="">ชื่อเล่น</label>
                    <input type="text" name="std_nname" id="">
                </div>
                <div>
                    <label for="">อายุ</label>
                    <input type="number" name="std_age" id="">
                </div>
                    <input type="submit" value="บันทึกข้อมูล">
            </form>
            <a href="index.php">กลับหน้าหลัก</a>
    </body>
</html>