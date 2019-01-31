<html>
<head>
	<title>delete</title>
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





	
	$sql = "DELETE FROM info_news where news_id='$news_id'";

	if(mysqli_query($conn, $sql))
{
    echo
        
"Record delete successfully";

}
else
{
echo "Error  deleting Record".mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>