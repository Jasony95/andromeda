<!DOCTYPE html>
<html>
    <head>
        <title>Orders</title>
        <link rel="stylesheet" type="text/css" href="orders.css">
    </head>
<body>

<?php

    require('head.inc');

?>

    <!--page content-->

<h1>Orders</h1>

<table border="1px" id="order" >
    <tr>
        <td><Img src = "Alarm Clock.jpg" id="clock" width="200px" height="150px"></td>
        <td><h2>Wireless Phone Charger Clock</h2><br /><B>Estimated delivery date:</B><br /><B>10/3/22</B></td>
    </tr>
    <tr>
        <td><Img src = "Rich Dad Poor Dad.jpg" id="rich" width="150px" height="200px"</td>
        <td><h2>Rich Dad Poor Dad</h2><br /><B>Delivered on:</B><br /><B>9/30/22</B></td>
    </tr>
    <tr>
        <td><Img src = "USB C Charger.jpg" id="charger" width="200px" height="200px"></td>
        <td><h2>Chotech 100w USB-C Charger</h2><br /><B>Returned on:</B><br /><B>9/22/22</B></td>
    </tr>
</table>

<?php

    require('foot.inc');

?>
</html>
