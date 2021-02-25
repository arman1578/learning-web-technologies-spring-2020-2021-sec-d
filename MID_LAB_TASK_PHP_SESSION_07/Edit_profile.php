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
    <table align="center" width="70%" border="1">
        <tr>
            <td align="left" colspan="3">
                <img width="20%" src="logo.png">
                <div width="100%" align="right">
                    Logged in as <a href="3"> <?php echo $user_name ?> &nbsp </a>
                    <a href="login.php">Logout</a>
                </div>
            </td>
        </tr>


        <tr>
            <td align="center" rowspan="3">
            <a href="Dashbord.php" >Dashbord</a><br>
                    <a href="Profile.php" >View Profile</a><br>
                    <a href="Edit_profile.php" >Edit Profile</a><br>
                    <a href="change_pic.php" >Change Profile Picture</a><br>
                    <a href="chang_pass.php">Change Password</a><br>
                    <a href="login.php" >Logout</a>
            </td>
            <td width="70%" rowspan="3">
                <fieldset>
                    <legend>Profile</legend>
                    <form action="editinfo.php" method="post">
                        <table>
                            <tr>
                                <td>Name : </td>
                                <td>
                                    <input type="text" name="changeName">
                                </td>

                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                    <input type="text" name="changeEmail">
                                </td>

                            </tr>
                            <tr>
                                <td> Gender : </td>
                                <td>
                                    <input type="radio" name="radio" value="male">Male
                                    <input type="radio" name="radio" value="female">Female
                                    <input type="radio" name="radio" value="other">Other
                                </td>

                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td>
                                    <input type="text" name="changeDOB">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    <?php if($updateinfo == 1){ $updateinfo = 0 ; echo "Info Updated";}      ?>
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
<?php
?>