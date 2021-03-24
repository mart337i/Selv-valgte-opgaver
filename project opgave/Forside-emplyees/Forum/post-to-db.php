<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if ($_SESSION['success'] == 0) {
    header("location: login.php");
    exit();
}
$host="localhost"; // Navn på host
$username="root"; // Mysgl username (Standard admin i linux er root)
$password="";    // mysgl password (Som standard ikke sat noget password)
$db_name="dbconnect"; // Database's navn
$tbl_name="opslag"; // Tabel's navn

$conn =mysqli_connect($host, $username, $password, $db_name);

$navn = $_SESSION['navn'];
$title = $_POST['title'];
$post = $_POST['post'];
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO `opslag`(`ID`, `Username`, `Date`, `Title`, `Input`) VALUES ('', '$navn', '$date', '$title', '$post')";
mysqli_query($conn, $sql);

header("location:forum.php");
?>
</body>
</html>