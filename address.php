<!DOCTYPE html>
<html>
    <head>
        <title>Change Address</title>
        <link rel="stylesheet" type="text/css" href="address.css" />
    </head>
<body>
        <?php
            require('head.inc');
        ?>

    <!--page content-->

    <h1>Change Address</h1>

    <table border="0" id="table" width="50%">
        <tr>
            <th>Current Address:</th>
            <th>Updated Address:</th>
        </tr>
        <tr>
            <td>1234 Williams Street, 12345, Pineham</td>
            <td>0987 Felicia Ave., 09876, Stonetown</td>
        </tr>
        <form method="POST" action="">
        <tr>
            <td colspan="2" style="text-align:center;">Address Line 1: <input type="text" name="address1"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;">Address Line 2: <input type="text" name="address2"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;">Zipcode: <input type="text" name="zipcode"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;">City: <input type="text" name="city"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;"><input type="submit" value="Submit"></td>
        </tr>
        </form>
    </table>

        <?php
            require('foot.inc');
        ?>
</body>
</html>