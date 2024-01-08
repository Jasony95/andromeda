<!DOCTYPE html>
<html>
<head>
    <title>Change Username</title>
    <link rel="stylesheet" type="text/css" href="changeusername.css" />
</head>
<body>
    <?php

        require('head.inc');

    ?>


    <!--page content-->

    <h1>Change Username</h1>

    <form method="post" action="">
        <table id="table" width="50%">
            <tr>
                <th>Current Username: </th>
                <th>Updated Username: </th>
            </tr>
            <tr>
                <th>Username1234</th>
                <th>NewUsername</th>
            </tr>
            <tr>
                <td colspan="2">New Username: <input type="text" name="new_name"></td>
            </tr>
            <tr>
                <td colspan="2">Password: <input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <?php

        require('foot.inc');

    ?>

</body>
<html>