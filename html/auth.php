<?php
require('function.php');

session_start();

if(isset($_COOKIE['_session']) && isset($_SESSION["NAME"])){

  $username = $_SESSION["NAME"];
  
  if(!empty($_GET['logout']) && $_GET['logout'] === 'true'){
    $_SESSION['err'] = 0;
    header('Location: ./login');
    exit();
  }
}else{
  header('Location: ./login');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>マイページ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <meta charset="UTF-8">
  </head>
  <body>

            


    <div class="container text-center">
    <h1>認証後のページ</h1>
    <h2 class="">ようこそ <?php echo $username; ?>さん</h2>

                <button type="submit" onclick="logout()">Logout</button>
    </div>
    <script>
      'use strict'
      function logout(){
        location.href="./auth?logout=true";
      }
    </script>
  </body>
</html>
