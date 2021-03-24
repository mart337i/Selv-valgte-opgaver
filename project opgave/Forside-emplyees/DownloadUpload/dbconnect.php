<?php
//connect mysql database
$host = "localhost";
$user = "root";
$password = "";
$db = "dbconnect";
$tbl_name="upload_download"; // Tabel's navn
$con = mysqli_connect($host, $user, $password, $db) or die("Error " . mysqli_error($con));
if (mysqli_connect_errno()){
    echo "failed";
        exit();
}
echo "succes";
?>
<?php
// only set $_SESSION [success] if youre working on the website and cant login //
session_start();
echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: ../login/login.php");
    exit();
}

?>
