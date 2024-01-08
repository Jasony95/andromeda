<!DOCTYPE html>
<html>
<head>
    <title>Support</title>
    <link rel="stylesheet" type="text/css" href="support1.css" />
</head>
<body>
    <?php

        require('head.inc');

    ?>


    <!--page content-->

    <h1>For Support:</h1>

    <table border="1px" id="image">
        <tr>
            <td><a href="onlinechat.php"><Img src="Online Chat Icon.png" width="200px" height="200px"></a></td>
            <td><a href="contact.php"><Img src="Phone Icon.png" width="200px" height="200px"></a></td>
            <td><a href="contact.php"><Img src="Email Icon.png" width="200px" height="200px"></a></td>
        </tr>
        <tr>
            <td id="chat"><a href="onlinechat.php">Online Chat</a></td>
            <td id="phone"><a href="contact.php">Phone</a></td>
            <td id="email"><a href="contact.php">Email</a></td>
        </tr>
    </table>

    <br />

    <table border="0" id="link">
        <tr>
            <td><a href="troublewithuser.php"><h2>Trouble with another user, click here</h2></a></td>
        </tr>
        <tr>
            <td><a href="username.php"><h2>Change online username, click here</h2></td>
        </tr>
        <tr>
            <td><a href="password.php"><h2>Change password, click here</h2></a></td>
        </tr>
    </table>

    <?php

        require('foot.inc');

    ?>

</body>
<html>