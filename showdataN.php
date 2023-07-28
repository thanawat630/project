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
$sql = "SELECT * FROM employees  ORDER BY empid ASC";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);
$order=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-striped table-hover">
            <h1 class="text-center">แสดงข้อมูลพนักงานทั้งหมด</h1>
            <br>
        <thead>
            <tr>
                <th>ลำดับที่</th>
                <th>ราคา</th>
                <th>จำนวน</th>
                <th>ที่อยู่</th>
                <th>วัน-เดือน-ปี</th>
                <th>รูปภาพ</th>
                <th>ลบข้อมูล</th>
                <th>แก้ไข</th>
             </tr>
        </thead>
        
        <tbody>
        <?php while($row=mysqli_fetch_array($result)){?>
            <tr>
            <div class="container my-3">
                <td><?php echo $order++ ;?></td>
               
                 <td><?php echo $row["price"] ;?></td>
                <td><?php echo $row["quantity"] ;?></td>
                <td><?php echo $row["location"] ;?></td>
                <td><?php echo $row["date"] ;?></td>
                <td><img src = "photo/ <?php echo $row['image'] ;?>" width=100px height=100px ></td>
                
               <!--ปุ่มลบข้อมูล--> 
                <td>
                    <a href = "deleteQueryString.php?idemp=<?php echo $row["empid"];?>"
                    class ="btn btn-danger "onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                </td>
                <!--ปุ่มแก้ไขข้อมูล-->
                <td>
                <a href = "editForm.php?id=<?php echo $row["empid"];?>"
                class="btn btn-success">แก้ไข</a>
            </td>  
            </tr>
        </div>
            <?php 
            }
            mysqli_close($conn);
            ?>
        </tbody>   
  </table> 
      <a href="insertFormN.php" class="btn btn-success">ย้อนกลับ</a>
      <a href="login1.php" class="btn btn-info">ออกจากระบบ</a>
      </div>         
</body>
</html>