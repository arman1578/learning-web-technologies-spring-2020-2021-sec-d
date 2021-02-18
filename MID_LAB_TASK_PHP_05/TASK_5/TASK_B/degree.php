<?php
$radioVal = $_POST["checkbox"];

if($radioVal == "ssc")
{
    echo"DEGREE: ssc";
}
else if ($radioVal == "hsc")
{
    echo"DEGREE: Hsc";
}
else if ($radioVal == "bsc")
{
    echo"DEGREE: bsc";
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="#">
    <fieldset>
    <legend>Degree</legend>

    <label><input type="checkbox" class="radio" value="ssc" name="checkbox" />SSC</label>
    <label><input type="checkbox" class="radio" value="hsc" name="checkbox" />HSC</label>
    <label><input type="checkbox" class="radio" value="bsc" name="checkbox" />BSc</label>
    <label><input type="checkbox" class="radio" value="bsc" name="checkbox" />MSc</label>

    </fieldset>

    <br>
    <input type="submit" name="submit" value="Submit">
    
</form> 
</body>
</html>