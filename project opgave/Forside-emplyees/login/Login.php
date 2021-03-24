
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Skærm</title>
</head>
<body>
<?php
session_start();
$_SESSION['success'] = 0;
echo $_SESSION['success'];
?>
    <form name="form1" method="POST" action="../checklogin.php">
        <table width="150px" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" padding-left="40px,0">
            <tr>
                <td colspan="3"><strong>Medlems Login </stong></td>
             </tr>
             <tr>
                 <td width="78">Brugernavn</td>
                 <td width="6">:</td>
                 <td width="294"><input name="username" type="text"></td>
             </tr>
             <tr>
                 <td>Adgangkode</td>
                 <td>:</td>
                 <td><input name="password" type="password"></td>
             </tr>
             <tr> 
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Logind" value="Login"</td>
             </tr>
            </table>
        </form>
</body>
</html>