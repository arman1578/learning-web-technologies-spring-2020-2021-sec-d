
<?php

session_start();
$user = $_SESSION['current_user'] ;

$user_name = $user ['user_name'];
$gender = $user ['gender'];
$date_birth = $user ['date_barth'];
$email =  $user ['email'];



?>

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
            <div width="100%" align="right">
                Logged in as <a href="3"> <?php echo $user_name ?> &nbsp </a>
                 <a href="login.php">Logout</a>
            </div>
        </td>
    </tr>


    <tr>
        <td align="center" rowspan="3" >
        <a href="Profile.php" >View Profile</a><br>
                    <a href="Edit_profile.php">Edit Profile</a><br>
                    <a href="change_pic.php">Change Profile Picture</a><br>
                    <a href="chang_pass.php">Change Password</a><br>
                    <a href="login.php">Logout</a>
        </td>
        <td width="70%" rowspan="3">
           <fieldset>
               <legend>Profile</legend>
               <table>
                   <tr>
                       <td>Name : </td>
                       <td><?php echo $user_name ?> </td>
                       <td rowspan="5" >
                       <img width="30%" src="user.png"><br>
                           <a href="">Change Profile Picture</a>
                       </td>
                   </tr>
                   <tr>
                   <td>Email : </td>
                       <td><?php echo $email ?> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td> Gender : </td>
                       <td><?php echo $gender ?> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Date of Birth : </td>
                       <td><?php  for(  $i = 0 ; $i < count($date_birth) ; $i++){echo $date_birth[$i]; if( $i !=2 ) { echo "/";  } } ?> </td>
                       <td></td>
                    </tr>
                   <tr>
                   <td>
                   <a href="">Edit Profile</a>
                   </td>
                      
                       <td></td>
                       <td></td>
                   </tr>

               </table>
           </fieldset>
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
        <td align="center" colspan="2" >
            copyright@2017
        </td>
    </tr>
</table>
</body>

</html>


