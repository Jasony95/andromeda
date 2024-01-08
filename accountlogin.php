<!DOCTYPE html>
<html>
    <head>
        <title>Andromeda Online Renting Account Login</title>
        <link rel="stylesheet" type="text/css" href="accountlogin.css" />
    </head>
<body>

    <?php
    require('head.inc');
    ?>

<!--page content-->

<h1>Customer Account Login</h1>

<form action="accountmain.php" method="POST">
    <table border="0" id="table">
        <tr>
            <th>Email:</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><input type="password" name="password"</td>
        </tr>
        <td colspan="2" align="center">
            <input type="submit" value="Sign In" id="button">
        </td>
    </table>
</form>

<table border="0" id="stable">
    <tr>
        <td><a href = "index.php" id="main" 
        style="text-align:center; font-weight: bold;">
        Back to Main Page</a></td>
    </tr>
    <tr>
        <td><a href="accountsignup.php" id="sign">
            <B>Don't have an account, <br />Sign Up by clicking here</B></a></td>
    </tr>
</table>

<br />



<?php
    require('foot.inc');
?>

</body>
<html>