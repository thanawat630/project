
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop shop Admin</title>
   </head>
<body>
   
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style1.css">
  
  <title>เข้าระสู่ระบบจัดการข้อมูลพนักงาน</title>
  
</head>
 


<section class="form-login">
  <div class="container">
    <h2> <i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าระสู่ระบบจัดการข้อมูลพนักงาน</h2>
    <form method="POST" action="adminpage.php">
      <div class="mb-3">
        <label for="username" class="form-label">ชื่อเข้าระบบ</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <i class="fa-solid fa-eye" id="eye"></i>
      </div>
      <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button> 
      <button type="reset" class="btn btn-warning">ล้างข้อมูล</button> 

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</section>


</html>
