<?php
session_start();
if(isset($_SESSION['usersName']))
{
  unset($_SESSION['usersName']);
}
header("Location: index.php");
die;