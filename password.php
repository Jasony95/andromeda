<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="changepassword1.css" />
</head>
<body>
    <?php

        require('head.inc');

    ?>


    <!--page content-->

    <h1>Change Password</h1>

    <form method="post" action="">
        <table id="table" width="50%">
            <tr>
                <th>Username: <input type="text" name="username"></th>
            </tr>
            <tr>
                <th>Old Password: <input type="password" name="old_password"></th>
            </tr>
            <tr>
                <th>New Password: <input type="password" name="new_password"></th>
            </tr>
            <tr>
                <th><input type="submit" value="Submit"></th>
            </tr>
        </table>
    </form>

    <br />

    <?php

        require('foot.inc');

    ?>

</body>
<html>