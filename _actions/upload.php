<?php

session_start();

$user = htmlspecialchars($_POST['username']);
$name = $_FILES['file']['name'];
$error = $_FILES['file']['error'];
$tmp = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];

echo $_POST['username'];

if ($user == 'kophyo' and $_GET['token'] == $_SESSION['token']) {

if($error) {
	header('location: ../index.php?error=file');
	exit();
} else {

move_uploaded_file($tmp, "../data/$name");

header('location: ../index.php?uploaded=file');

} } else { header('location: ../index.php?nopermission=true'); }
