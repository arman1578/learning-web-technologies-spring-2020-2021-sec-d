<?php

session_start();
$user = $_SESSION['current_user'];
$updateinfo = $_SESSION['updateInfoDone'];
 
if ( $updateinfo == 1 ){
    $updateinfo = 1 ;
}else
$updateinfo = 0;

$user_name = $user['user_name'];
$gender = $user['gender'];
$date_birth = $user['date_barth'];
$email =  $user['email'];
?>






<!DOCTYPE html>
<html>

    <head>
        <title>Edit Profile</title>
    </head>

    <body>
        <table align="center" width="70%" border="1" >
            <tr>
                <td align="left" colspan="3">
                    <img width="20%" src="logo.png">
                    <div width="100%" align="right">
                        Logged in as
                        <a href="3" >
                            <?php echo $user_name ?> &nbsp </a>
                        <a href="login.php">Logout</a>
                    </div>
                </td>
            </tr>


            <tr>
                <td align="center" rowspan="3">
                <a href="Dashbord.php">Dashbord</a><br>
                    <a href="Profile.php" >View Profile</a><br>
                    <a href="Edit_profile.php">Edit Profile</a><br>
                    <a href="change_pic.php" >Change Profile Picture</a><br>
                    <a href="chang_pass.php" >Change Password</a><br>
                    <a href="login.php">Logout</a>
                </td>
                <td width="70%" rowspan="3">
                    <fieldset>
                        <legend>Profile Picture</legend>
                        <form>
                            <table>
                                <tr>
                                    <td>
                                        <img width="20%" src="user.png">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="file" name="photo_change">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Submit">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td align="center" colspan="2">
                    copyright@2017
                </td>
            </tr>
        </table>
    </body>

</html>