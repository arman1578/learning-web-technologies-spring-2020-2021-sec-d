<?php
    $title = "Reported Issues Page";
    require_once('../Model/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Feedback
    </title>
</head>
<body background="../Asset/bg.jpg">
        <div class="main" id="home">
            <br />
            <h3 align="center">
                <font face="sans" size="4">
                    <a href="home.html">BACK</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../index.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../Controller/logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </font>
            </h3>
        </div>
    </body>
</html>

<?php

    echo "<center><hr/><h2>Reported Issues</h2><hr/></center>";

      $sql = "select * from issues";
      $conn = getConnection();
      $result = mysqli_query($conn, $sql);

      echo "<table align=center width = 50% border=1 cellspacing=15% cellpadding=15%>
      <tr>
          <td align = center><b>Username</b></td>
          <td align = center><b>User Type</b></td>
          <td align = center><b>Priority</b></td>
          <td align = center><b>Comments</b></td>
          <td align = center><b>Progress</b></td>
      </tr>";

      while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td align = center>{$row['Username']}</td>
                    <td align = center>{$row['User Type']}</td>
                    <td align = center>{$row['Priority']}</td>
                    <td align = center>{$row['Comments']}</td>
                    <td align = center>{$row['Progress']}</td>
                </tr>";
      }
?>