<?php
$con=mysqli_connect("localhost","root","password","dbname");

$email = $_POST['email'];

$sql = "UPDATE member SET device_ox='yes' WHERE email='$email'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>