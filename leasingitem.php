<!DOCTYPE html>
<html>
<head>
    <title>Lease an Item</title>
    <link rel="stylesheet" type="text/css" href="leasingitem.css" />
</head>
<body>
    <?php

        require('head.inc');

    ?>


    <!--page content-->

    <h1>Lease Item</h1>

    <form action="" method="post">
    <table border="0">
        <tr>
            <th>Item Renting (title): </th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>Description/Specs: </th>
            <td><textarea id="description" name="description" rows="4" cols="50"></textarea></td>
        </tr>
        <tr>
            <th>Category: </th>
            <td><input type="text" name="type"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="button" id="button" value="Upload Image"></td>
        </tr>
        <tr>
            <th>Selling Price: </th>
            <td><input type="text" name="buy_price"></td>
        </tr>
        <tr>
            <th>Leasing Price: </th>
            <td><input type="text" name="leased_price"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </form>
        
    </table>



    <?php

        require('foot.inc');

    ?>

</body>
<html>