<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <style>
    form{
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: 0 auto;
      margin-bottom: 30PX;
    }
    input{
      margin-bottom: 10px;
      padding: 10px;
    }
    button{
      padding: 10px;
      background-color: blue;
      color: white;
      border: none;
    }
    .p{
      text-align: center;
      color: black;
    }
  </style>

<?php  
include "service/database.php";
$register_massage = "";

if(isset($_POST["register"])){
  $username = $_POST["username"];  
  $password = $_POST["password"];

  $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  
  if($db->query($sql)){
    $register_massage = "Register Berhasil";
  } else {
   $register_massage = "Register Gagal";
  }
}
?>


  <body>
    <?php include "layout/header.html"?>
  <h2 style="text-align:center">Daftar Akun</h2>
    <p class="p"><i><?php echo $register_massage; ?></i></p>
    <form action="register.php" method="POST">
      <input type="text" name="username" placeholder="Masukkan Nama">
      <input type="password" name="password" placeholder="Masukan Password">
      <button type="submit" name="register">Daftar Akun</button>
    </form>
    <?php include "layout/footer.html"?>
  </body>
  </html>