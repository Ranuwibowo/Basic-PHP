
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

  if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $usrname.''.$password;
  }

?>

  <body>
    <?php include "layout/header.html"?>
  <h2 style="text-align:center">Login</h2>
    <form  action="login.php" method="POST">
      <input type="text" name="nama" placeholder="Masukkan Nama">
      <input type="password" name="Password" placeholder="Masukan Password">
      <button type="submit" name="login">Langsung gas</button>
    </form>
    <?php include "layout/footer.html"?>
  </body>
  </html>