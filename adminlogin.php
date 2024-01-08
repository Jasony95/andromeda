<!DOCTYPE html>
<html>
    <head>
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="admin.css" />
    </head>
<body>

    <?php
        require('head.inc');
    ?>

    <!-- page content-->

    <h1>Administrator Account Login</h1>

<form action="adminlogin.php" method="POST">
    <table border="0" id="maintable">
        <tr>
            <td>
                <Img src="admin.gif">
            </td>
            <td>
                <td><table border="0" id="midtable">
                <tr>
                    <th>Username:</th>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password"</td>
                </tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Sign In" id="button">
                </td>
                </table>
            </td>
            <td>
                <Img src="admin.gif">
            </td>
        </tr>
    </table>
</form>

<table border="0" id="stable">
    <tr>
        <td><a href = "index.php" id="main" 
        style="text-align:center; font-weight: bold;">
        Back to Main Page</a></td>
    </tr>
</table>

<?php
    require('foot.inc');
?>

</body>
<html>