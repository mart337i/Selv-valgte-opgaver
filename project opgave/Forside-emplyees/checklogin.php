<?php
//connect mysql database
$host = "localhost";
$user = "root";
$password = "";
$db = "dbconnect";
$conn = mysqli_connect($host, $user, $password, $db);
$tbl_name="login"; // Tabel's navn

if (mysqli_connect_errno()){
    echo "failed";
        exit();
}
echo "succes";

session_start();
if (isset($_SESSION['login'])){
    $_SESSION['login'] ++; }
else {$_SESSION['login'] = 1;
}
if ($_SESSION['login'] == 5) {
    //unset($_SESSION["login"]);
    header("Location: http://www.google.com");
}
     // Brugernavn og password fra formular
     $my_username=$_POST['username'];
     $my_password=$_POST['password'];

     $sql = "SELECT * FROM $tbl_name WHERE username='$my_username' and password='$my_password'";
     $resultat = mysqli_query($conn, $sql);
     $count =mysqli_num_rows($resultat);
     if ($count == 1){
     

        //Hvis en bruger eksistere, bruger vi "head(location: ...)" metoden for at sende brugeren
        // til den side der kræver login.
        $_SESSION['success'] = 1;
        $_SESSION['login'] = 1;
        header("location: forside/index.php");
    }
    else
    {
        //Hvis "$count" ikke er lig med 1, så skriver vi bedsked til brugeren.
       
       echo "Forkert Brugernavn eller password"; }
       $_SESSION['finished'] = false;
       ?>