
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
  </style>

<?php
  include "service/database.php";

  session_start();

    $login_massage = "";

  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM  users WHERE username ='$username' AND password = '$password'";

    $result = $db->query($sql);

    if($result->num_rows> 0){
      $data= $result->fetch_assoc();
      $_SESSION['username'] = $data['username'];
       header("Location: dasboard.php");
    } else {
      $login_massage = "Login Gagal";
    }
  }

?>

  <body>
    <?php include "layout/header.html"?>
  <h2 style="text-align:center">Login</h2>
    <i><? $login_massage ?></i>
    <form  action="login.php" method="POST">
      <input type="text" name="username" placeholder="Masukkan Nama">
      <input type="password" name="password" placeholder="Masukan Password">
      <button type="submit" name="login">Langsung gas</button>
    </form>
    <?php include "layout/footer.html"?>
  </body>
  </html>