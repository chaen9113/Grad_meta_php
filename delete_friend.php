<?php
$con=mysqli_connect("localhost","root","password","dbname");

$email = $_POST['email'];
$f_email = $_POST['f_email'];

$sql = "DELETE FROM friend where email='$email' and f_email='$f_email'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>