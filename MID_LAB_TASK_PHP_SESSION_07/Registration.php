<!DOCTYPE html>
<html>

<head>
    <title>Public Home</title>
</head>

<body>
    <table align="center" width="70%" border="1">
        <tr>
            <td align="left" colspan="3">
                <img width="20%" src="logo.png">
                <div align="right">
                    <a href="publichome.html">Home</a>
                    <a href="login.php">Login</a>
                    <a href="Registration.php">Registration</a>
                </div>
            </td>
        </tr>

        <tr>

            <td align="left" colspan="3" width="70%">
                <fieldset>
                    <legend>Registration</legend>
                    <form method="post" action="Public_reg_validation.php">
                        <table>
                            <tr>
                                <td> Name:</td>
                                <td><input type="text" name="name" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" name="email" value=""></td>

                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>User Name:</td>
                                <td><input type="text" name="user_name" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="password" value=""></td>

                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Consfirm Password:</td>
                                <td><input type="password" name="confirm_password" value=""></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                        </table>
                        <fieldset>
                            <legend>Gender</legend>
                            <table>
                                <tr>
                                    <td><input type="radio" name="radio" value="male">Male</td>
                                    <td><input type="radio" name="radio" value="female">Female</td>
                                    <td><input type="radio" name="radio" value="other">Other</td>
                                </tr>

                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <table>
                                <tr>
                                    <input type="text" name="day" size="1"> /
                                    <input type="text" name="month" size="1"> /
                                    <input type="text" name="year" size="1"> (dd/mm/yy)
                                </tr>
                            </table>
                        </fieldset>
                        <div align="left">
                            <br>
                            <input type="submit" name="submit" value="Submit" id="">
                            <input type="reset" name="reset" value="Reset" id="">

                        </div>

                    </form>
                </fieldset>

            </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <p>copyright @ 2017</p>
                </td>
            </tr>
    </table>
</body>

</html>