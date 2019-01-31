<!DOCTYPE html>
<html>
<head>
    <title>db connect</title>
</head>
<body>
 <?php

$server="localhost";
$username="root";
$password="";
$dbname="news";

$conn= mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("connection faild".mysqli_connect_error());
}
echo
    ("conected successfully");



mysqli_close($conn);

?>
</body>
</html>>