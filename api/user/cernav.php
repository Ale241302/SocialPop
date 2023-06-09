<?php
include_once '../config/database.php';
include_once '../objects/user.php';
session_start();

if (isset($_SESSION['usuario'])) {
  // get database connection
  $database = new Database();
  $db = $database->getConnection();

  // prepare user object
  $user = new User($db);
  $user->usuario = $_SESSION['usuario'];

  // log out user
  session_destroy();

  // register log
  $user->cernav();
  header('Location: ../../login.php');
  // redirect to login page
  exit;
} else {
  exit;
}
?>