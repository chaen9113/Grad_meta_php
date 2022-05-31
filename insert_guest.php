<?php
$con=mysqli_connect("localhost","root","password","dbname");

$gname = $_POST['gname'];
$gavatar = $_POST['gavatar'];

$sql = "INSERT INTO guest(gname, gavatar) VALUES ('$gname', '$gavatar')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>