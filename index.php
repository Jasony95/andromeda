<!DOCTYPE html>
<html>
    <head>
        <title>Andromeda Online Renting</title>
        <link rel="stylesheet" type="text/css" href="index4.css" />
    </head>
<body>

<?php
    require('head.inc');
?>
    <!--page content-->

    <h1>Main Page</h1>

    <?php
        $volley = "<td><Img src = \"volleyball net.jpg\" id=\"volley\"></td>";
        $catan = "<td><Img src = \"Settlers of Catan.jpg\" id=\"catan\"></td>";

        $mainpic = array($volley, $catan);

        shuffle($mainpic);
    ?>

    <table width="100%" border="0" class="center">
        <tr>
        <?php

            for ($i = 0; $i < 2; $i++) {
                
                echo $mainpic[$i];


            }

        ?>

        <!--<tr>
            <td>
                <Img src = "volleyball net.jpg" id="volley">
            </td>
            <td>
                <Img src = "Settlers of Catan.jpg" id="catan">
            </td>
        </tr>-->
        </tr>
    </table>

    <?php

        $tennis = "<td><Img src = \"tennis racket.jpg\" id=\"tennis\" width=\"200px\" height=\"200px\"></td>";
        $tea = "<td><Img src = \"teabag.jpg\" id=\"tea\" width=\"200px\" height=\"200px\"></td>";
        $ball = "<td><Img src = \"Dodge Balls.jpg\" id=\"ball\" width=\"200px\" height=\"200px\"></td>";
        $iphone = "<td><Img src = \"SMARTPHONE 3.jpg\" id=\"phone\" width=\"200px\" height=\"200px\"></td>";
        $rich = "<td><Img src = \"Think and Grow Rich.jpg\" id=\"rich\" width=\"150px\" height=\"200px\"></td>";

        $recolist = array($tennis, $tea, $ball, $iphone, $rich);

        shuffle($recolist);

    ?>

    <table width="100%" border="0" bgcolor="#ffff00" class="recomtable">
        <tr>
            <td>
                <p id="recommend">Recommended Items:</p>
            </td>
        <tr>
        <?php

            for ($i = 0; $i < 5; $i++) {

                echo $recolist[$i];

            }

        ?>

        <!--
        <tr>
            <td>
                <Img src = "tennis racket.jpg" id="tennis" width="200px" height="200px">
            </td>
            <td>
                <Img src = "teabag.jpg" id="tea" width="200px" height="200px">
            </td>
            <td>
                <Img src = "Dodge Balls.jpg" id="ball" width="200px" height="200px">
            </td>
            <td>
                <Img src = "SMARTPHONE 3.jpg" id="phone" width="200px" height="200px">
            </td>
            <td>
                <Img src = "Think and Grow Rich.jpg" id="rich" width="150px" height="200px">
            </td>-->
        </tr>
    </table>

    <br />

    <?php

        $pro = "<td><Img src = \"iMac Pro.jpg\" id=\"pro\" width=\"200px\" height=\"200px\"></td>";
        $bookpro = "<td><Img src = \"Macbook Pro 2020.jpg\" id=\"macbook\" width=\"200px\" height=\"200px\"></td>";
        $air = "<td><Img src = \"Macbook Air.jpg\" id=\"air\" width=\"200px\" height=\"200px\"></td>";
        $pod = "<td><Img src = \"airpod.jpg\" id=\"pod\" width=\"200px\" height=\"200px\"></td>";
        $ipad = "<td><Img src = \"ipad.jpg\" id=\"pad\" width=\"200px\" height=\"200px\"></td>";

        $relatelist = array($pro, $bookpro, $air, $pod, $ipad);

        shuffle($relatelist);

    ?>

    <table width="100%" border="0" bgcolor="#ffff00" class="relatable">
        <tr>
            <td>
                <p id="related">Related Items:</p>
            </td>
        <tr>
            <?php

                for ($i = 0; $i < 5; $i++) {

                    echo $relatelist[$i];


                }

            ?>
        <!--
        <tr>
            <td>
                <Img src = "iMac Pro.jpg" id="pro" width="200px" height="200px">
            </td>
            <td>
                <Img src = "Macbook Pro 2020.jpg" id="macbook" width="200px" height="200px">
            </td>
            <td>
                <Img src = "Macbook Air.jpg" id="air" width="200px" height="200px">
            </td>
            <td>
                <Img src = "airpod.jpg" id="pod" width="200px" height="200px">
            </td>
            <td>
                <Img src = "ipad.jpg" id="pad" width="200px" height="200px">
            </td>
        -->
        </tr>
    </table>

    <br />

<?php
    require('foot.inc');
?>
