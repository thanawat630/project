<?php 
require("dbconnect.php");
$id=$_GET["id"];

$sql="SELECT * FROM employees WHERE empid = $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop shop Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
        <form action="updateData.php" method="post" enctype="multipart/form-data">  
            <input type="hidden" name="id" clasee="form-control" value="<?php echo $row["empid"];?>">
            <div class="form-group">
                <label for="price">ราคา</label>    
                <input type="text" name="price" id="" class="form-control" value=<?php echo $row["price"];?>>
            </div>
            <div class="form-group">
                <label for="quantity">จำนวน</label>    
                <input type="text" name="quantity" id="" class="form-control" value=<?php echo $row["quantity"];?>>
            </div>
            <div class="form-group">
                <label for="quantity">ที่อยู่</label>    
                <input type="text" name="location" id="" class="form-control" value=<?php echo $row["location"];?>>
            </div>
            <label for="date">วัน-เดือน-ปี</label>
            <br>
            <input type="date" name = "birthday" id="" class="form-control" required>  
            
            <br>
            <div class="form-group">
                <label for="image">รูปภาพ</label>
                <br>    
                <img src="photo/<?php $row['image']?>"  width=100px height=100px > 
                <br>
                <br>
                <input type="file" name="fileToUpload" id="fileToUpload" required>
                
             </div>


            <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="showdataN.php" class="btn btn-primary">ย้อนกลับ</a>
        </form>
    </div>
</body>
</html>