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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - shop shop Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
            <!-- Navbar Brand-->
                        <div id="layoutSidenav_content">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            <th>ที่อยู่</th>
                                            <th>วัน-เดือน-ปี</th>
                                            <th>รูปภาพ</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ที่อยู่</th>
                                            <th>วัน-เดือน-ปี</th>
                                        </tr>   
                                        <tbody> 
<?php                           
$sql = "SELECT * FROM employees  ORDER BY date desc ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)) {

?>

                                        
                                    </tfoot>
                                    
                                    <tr> 
                                        <td><?php echo $row["price"] ;?></td>
                                        <td><?php echo $row["quantity"] ;?></td>
                                        <td><?=$row['location']?></td>
                                        <td><?=$row['date']?></td>
                                        <td><img src = "photo/ <?php $row['image']?>" width=100px height=100px ></td>
                                    </tr>
                                    
                                <?php
                                }
                                //mysqli_close($conn)
                                ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <a href="insertFormN.php" class="btn btn-success">กรอกข้อมูล</a>
                <a href="login1.php" class="btn btn-info">กลับหน้าหลัก</a>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
       
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>