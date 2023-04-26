<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();
session_start();
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->usuario = isset($_GET['usuario']) ? $_GET['usuario'] : die();
$user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
// read the details of user to be edited
$stmt = $user->login();
// Start output buffering
ob_start();

if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt2 = $user->log();
    $_SESSION['usuario'] = $user->usuario;
    
    // create array
    header('Location: ../../index.php?usuario=' . urlencode($user->usuario));
     // Send output buffer to browser
    ob_end_flush();
}
else{
	echo "<script>alert('Usuario o contraseña incorrecto.')</script>";
    echo "<script>window.location.href='../../login.php';</script>";
	exit;
    }
// make it json format
?>