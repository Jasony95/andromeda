<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" type="text/css" href="accountsignup.css" />
    </head>
<body>

        <?php
            require ('head.inc');
        ?>

<!--page contents-->

<h1>Sign Up</h1>

<form method="accountpage.php" action="post">
    <table border="0" id="table">
        <tr>
            <th>Email:</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th>Username:</th>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <th>First Name:</th>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <th>Middle Name:</th>
            <td><input type="text" name="midname"></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><input type="text" name="lastname"></td>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <td><input type="text" name="phonenumber" value="123-456-7890"></td>
        </tr>
        <tr>
            <th>Address Line 1:</th>
            <td><input type="text" name="address1"></td>
        </tr>
        <tr>
            <th>Address Line 2:</th>
            <td><input type="text" name="address2"></td>
        </tr>
        <tr>
            <th>City:</th>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <th>State:</th>
            <td><select name="state" id="state">
                <option value="AL">Alabama</option>
	            <option value="AK">Alaska</option>
	            <option value="AZ">Arizona</option>
	            <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            </td>
        </tr>
        <tr>
            <th>Zipcode:</th>
            <td><input type="text" name="zipcode"></td>
        </tr>
        <td colspan="2" align="center">
            <input type="submit" value="Sign Up" id="button">
        </td>
    </table>
</form>

    <?php
        require ("foot.inc");
    ?>

</body>
</html>