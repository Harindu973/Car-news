<html>
	<head>
		<title></title>
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



$sql = "UPDATE info_news SET news_id='$news_id'";

	if(mysqli_query($conn, $sql))
{
    echo
        
"Record updated successfully";

}
else
{
echo "Error  updating Record".mysqli_error($conn);
}

mysqli_close($conn);
?>
	</body>
</html>