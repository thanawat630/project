<?php
//เชื่อมต่อฐานข้อมูล
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "mini_db";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if(!$conn){
    die("Connection failed; "  . mysqli_connect_error());
}
//echo "Connected successfully";


//รับค่าที่ส่งมาจากฟอร์ม
$price= $_POST["price"]; 
$quantity= $_POST["quantity"];
$location= $_POST["location"];
$date= date('Y-m-d', strtotime($_POST["birthday"]));

if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
  $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
  $image_upload_path = "photo/".$new_image_name;
  move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$image_upload_path);

}else{
  $new_image_name = "";
}


    $sql = "INSERT INTO 
    employees(price,quantity,image,location,date) 
    VALUES('$price','$quantity','$new_image_name','$location','$date')";
    $result=mysqli_query($conn,$sql);

    if ($result) {
      header("location:showdataN.php");
    }else {
      echo mysqli_error($conn);
    } 




 
 
  


//ตรวจสอบการทำงานของคำสั่ง Insert

?>