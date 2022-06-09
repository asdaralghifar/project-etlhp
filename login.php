<?php
session_start();
if($_SESSION){
    if($_SESSION['level']=="superadmin")
    {
        header("Location: super_admin");
    }
    
    if($_SESSION['level']=="admin")
    {
        header("Location: admin");
    }
}
include('cek.php'); 
?>
 
<!DOCTYPE html>
<html>

<head>
  <title>Silahkan Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<div class="login-page">
    <div class="form">
      <form class="login-form" action='' method='post'>
        <h3>Silahkan Login</h3>
        <input type="text" name='username' autofocus placeholder="username" required/>
        <input type="password" name='password' placeholder="password" required/>
        <button type="submit" name='submit' >Login</button>
      </form><br>
      <p> 
              Copyright &copy; 2021 Team CIA-IT UHO
      </p>
    </div>
</div>

</body>
</html>
