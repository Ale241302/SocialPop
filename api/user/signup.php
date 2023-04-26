<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
session_start();
$user = new User($db);
 
// set user property values
$user->usuario = $_POST['usuario'];
$user->password = base64_encode($_POST['password']);
// Start output buffering
ob_start();

// create the user
if($user->signup()){
    $_SESSION['usuario'] = $user->usuario;
    $stmt2 = $user->log3();
    // create array
    header('Location: ../../index.php?usuario=' . urlencode($user->usuario));
     // Send output buffer to browser
    ob_end_flush();
}
else{
    echo "<script>alert('Usuario Ya Existe.')</script>";
    echo "<script>window.location.href='../../login.php';</script>";
	exit;
}
print_r(json_encode($user_arr));
?>