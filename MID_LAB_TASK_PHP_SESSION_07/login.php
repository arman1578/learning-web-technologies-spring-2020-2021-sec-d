<?php
session_start();

if ( isset ( $_POST [ 'submit' ] ) )
{
    $user_name =  $_POST [ 'user_name' ]   ;
    $user_name_length = strlen($user_name);
    $password =   $_POST [ 'password' ]  ;
    $password_length = strlen($password);
    
    
    if ($user_name == "" && $password == "") {
        echo "Filled all thi file.";
    }
    elseif ( !preg_match('/^[a-zA-Z][a-zA-Z0-9._]/i', $user_name) && !preg_match("/[@#$%]/",$password) ){
        echo "Username and password Didn't match";
    } 
    elseif ( $user_name_length < 2  && $password_length < 8) {
        echo "Username and password Didn't match";
    }
    else
    {
                 $user = $_SESSION['current_user'] ;

         if ( $password == $user ['password'] && $user_name == $user ['user_name'] ) {
            header('location: Dashbord.php');
         }
         else
         {
            echo "Password and Username didn't match";
         }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Public Log in</title>
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
            <td colspan="3" width="70%">

                <fieldset>
                    <legend>Login</legend>
                    <table>
                        <form method="post" action="#">
                            <tr>
                                <td>User Name:</td>
                                <td><input type="text" name="user_name" value=""></td>
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
                                <td><input type="radio" name="remember_me">Remeber Me</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    <a href="Forgot_password.php">Forgot Poassword?</a>
                                </td>

                            </tr>
                    </table>
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