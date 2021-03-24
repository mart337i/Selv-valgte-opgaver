<?php
session_start();
//echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: login.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", method="POST">
    <title>Lav Opslag</title>

</head>
<body>


<style>
.Topmid {
  position: absolute;
  top: 10%;
  right: 28.1% ;
  font-size: 15 px;
}

     body {
   background-image:url('https://digitaldetox.io/wp-content/uploads/2018/02/AI-world-forum-background-cropped-1920x1000.jpg');
   background-size:100%;
   background-repeat:no-repeat;
   height: 100%;
   width: 100%;
}
.container {
  position: relative;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}
</style>
<div class="Topmid">
<h1 style="color:White"> <center>Lav nyt opslag</center></h1>
  <form action="post-to-db.php" method="POST"><br>
    <input type="text" name="title" placeholder="Overskrift"><br><br>
    <textarea style="resize: none;" name="post" rows="10" cols="100" placeholder="Skriv dit opslag her"></textarea> <br><br>
    <input type="submit" value="Opret opslag">
    </div>

    <div class="topright">
                  <input type="button" value="Log ud" onclick="location.href='../logout.php';">
                  <br>
                  <input type="button" value="Tilbage" onclick="location.href='forum.php';">
                  </div>
  </form>
</body>
</html>
