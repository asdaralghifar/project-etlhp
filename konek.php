<?php
$db_host = 'localhost';
      $db_port = '3306';
      $db_name = 'db_laporan';
      $db_user = 'root';
      $db_pass = '';

      try {
        $pdo = new PDO( 'mysql:host='.$db_host.';port='.$db_port.';dbname='.$db_name , $db_user, $db_pass, array(PDO::MYSQL_ATTR_LOCAL_INFILE => 1) );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e)
      {
        $errMessage = 'Gagal terhubung dengan MySQL' . ' # MYSQL ERROR:' . $e->getMessage();
        die($errMessage);
      }
?>