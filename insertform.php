<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>บันทึกการขอใช้งบประมาณ โรงเรียนร้อยเอ็ดวิทยาลัย</title>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
        <link href="form-validation.css" rel="stylesheet">
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
        <script src="assets\dist\js\bootstrap.min.js"></script>
        <script src="form-validation.js"></script>       
    </body>
</html>