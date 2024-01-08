<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="suggestion.css" />
</head>
<body>
    <?php

        require('head.inc');

    ?>


    <!--page content-->

    <h1>Suggestions</h1>

    <h2>We welcome any feedback</h2>

    <p>Write in box:</p>

    <br />

    <form method="POST" action="">
        <textarea id="textarea" name="review" rows="20" cols="100"></textarea>

        <h3>All feedback are anonymous</h3>

        <input type="submit" value="Submit" id="button">

    </form>

    <br />

    <?php

        require('foot.inc');

    ?>

</body>
<html>