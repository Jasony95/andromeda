<!DOCTYPE html>
<html>
<head>
    <title>Welcome Administrator!</title>
    <link rel="stylesheet" type="text/css" href="adminmain.css" />
</head>
<body>
    <?php

        require('head.inc');

    ?>


    <!--page content-->

    <h1>Welcome Administrator</h1>

    <form method="POST" action="deleteuser.php">
    <table id="user" border="1px" style="border-collapse:collapse;">
        <tr>
            <th>CustomerID</th>
            <th>Account Type</th>
            <th>Seller</th>
            <th>Buyer</th>
            <th>Renter</th>
            <th>Lessor</th>
            <th>Created Date</th>
            <th>Banned Date</th>
            <th>Ban</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>12345</td>
            <td>admin</td>
            <td>false</td>
            <td>false</td>
            <td>false</td>
            <td>false</td>
            <td>1/1/21</td>
            <td>NULL</td>
            <td><input type="checkbox" name="ban"></td>
            <td><input type="checkbox" name="delete"></td>
        </tr>
    </table>

    <br />

    <div id="deleteuser"><input type="submit" value="Delete"></div>
    </form>

    <br />

    <form method="post" action="deleteitem.php">
    <table id="items" border="1px" style="border-collapse:collapse;">
        <tr>
            <th>itemID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description</th>
            <th>Image</th>
            <th>Date Posted</th>
            <th>Renting Price</th>
            <th>Buying Price</th>
            <th>Delete</th>
        </tr>
        <tr>
            <td>09876</td>
            <td>Iphone21</td>
            <td>Smartphone</td>
            <td>Best Smartphone Ever</td>
            <td><Img src="SMARTPHONE 3.jpg" width="100px" height="100px"</td>
            <td>8/15/22</td>
            <td>$321</td>
            <td>$2021</td>
            <td><input type="checkbox" name="itemdel"></td>
        </tr>
    </table>

    <br />

    <div id="deleteitem"><input type="submit" value="Delete"></div>

    </form>

    <br />
    
    <?php

        require('foot.inc');

    ?>

</body>
<html>