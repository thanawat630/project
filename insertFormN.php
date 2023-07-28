<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "mini_db";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if(!$conn){
    die("Connection failed; " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop shop Insert</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูลบันทึกข้อมูล</h2>
        <form name="form1" action="insertdataN.php" method="post" enctype="multipart/form-data">            
            <div class="form-group">
                <label for="price">ราคา</label>    
                <input type="text" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="quantity">จำนวน</label>    
                <input type="text" name="quantity"  class="form-control" required>
            </div>
            <div class="form-group">
                <label for="location">ที่อยู่</label>    
                <input type="text" name="location"  class="form-control" required>
            </div>
            <label for="birthday">วัน-เดือน-ปี</label>
            <br>
            <input type="date" name = "birthday" class="form-control" required> 
            
            <br>    
            <label for="image">รูปภาพ</label>     
            <input type="file" name="fileToUpload" required>
            <br>
            <br>
        
            <input type="submit" name="btn-insert" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="login1.php" class="btn btn-primary">กลับหน้าแรก</a> 
        </form>
        

    </div>
    
</body>
</html>