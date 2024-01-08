<!DOCTYPE html>
<html>
    <head>
        <title>Account Page</title>
        <link rel="stylesheet" type="text/css" href="accountmain1.css" />
    </head>
<body>
    
    <?php
        require ('head.inc');
    ?>

<!--page content-->

    <h1>Your Account</h1>

    <table border="0" id="table" width="100%">
        <tr>
            <td><a href="orders.php"><button id="orders">Orders</button></a>
            <td><a href="lists.php"><button id="lists">Lists</button></a>
            <td><a href="subscription.php"><button id="subscription">Subscribe</button></a>
        </tr>
        <tr>
            <td><a href="address.php"><button id="address">Address</button></a>
            <td><a href="lessor.php"><button id="lessor">Become a Lessor</button></a>
            <td><a href="itemleasing.php"><button id="leasing">Items Leasing</button></a>
        </tr>
        <tr>
            <td><a href="username.php"><button id="username">Username</button></a>
            <td><a href="password.php"><button id="password">Password</button></a>
            <td><a href="specials.php"><button id="special">Specials</button></a>
        </tr>
    </table>

    <?php
        require ('foot.inc');
    ?>

</body>
</html>