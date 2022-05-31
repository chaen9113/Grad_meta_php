<?php
$con=mysqli_connect("localhost","root","password","dbname");

$mname = $_POST['mname'];
$access = "personal";

$sql = "INSERT IGNORE INTO map(mname, access) VALUES ('$mname', '$access')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>