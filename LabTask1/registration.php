<!DOCTYPE HTML>
<html>

<head>
    <title>Registration Page </title>
</head>

<body>
    <h1>My Registration Page</h1>
    <form>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="firstName"> </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="userName"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="passsword"></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label>
                </td>
            </tr>
            <tr>
                <td>Date of Birth <br></td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>

                <td><input type="submit" value="Submit">
                    <input type="reset">
                </td>


            </tr>

        </table>

    </form>
</body>

</html>