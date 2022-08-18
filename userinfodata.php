<?php 

$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection Successful";
}else{
    echo"No Connection";
}

mysqli_select_db($con, 'business_website');

$name = $_POST['name'];
$category = $_POST['Category'];
$phone = $_POST['Phone'];
$city = $_POST['City'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into userinfodata (name,Category,Phone,City,email,message)
values ('$name','$category','$phone','$city','$email','$message')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>