<?php

$con =mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "no connection";

}


mysqli_select_db($con,'datalogin');

$user = $_POST['user'];
$email = $_POST['email'];

$query = "INSERT INTO `login`(`email`, `password`)
values ('$email','$password')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>