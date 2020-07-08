<?php

require 'connection.php';

  $userid =$_SESSION['user_id'];

session_start();

session_unset();

 header("location: whatsapp_login.php");
?>