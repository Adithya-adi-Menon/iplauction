<?php
session_start();
  if(isset($_POST['logout']))
  {
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['tickets']);
    header('Location: index.php');
  }



 ?>
