

<!DOCTYPE html>
<html>
<head>
<title>insert</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

  <div class="in-form">
                <form action="insert.php" method="POST" name="upload"> 
                  <div class="form-group">
                    <label><b>News Title</b></label>
                    <input type="text" class="form-control" name="title"><br>
                  </div>

                  <div class="form-group">
                    <label><b>Author</b></label>
                    <input type="text" class="form-control" name="Author"><br>
                  </div>

                  <div class="form-group">
                    <label><b>Insert Your Image</b></label><br>
                    <input type="file" name="image"><br><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>News Short Description</b></label>
                    <textarea class="form-control" name="sub_title"  rows="10" ><pre><font color="gray"><!-- Do Not Erase this tags--> </textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1"><b>News Content</b></label>
                    <textarea class="form-control" name="info"  rows="10" ><pre><font color="gray"><!-- Do Not Erase this tags--> </textarea>
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary"  value="Post Your News">
                  </div>
                </form>
</div>

<?php

include_once 'dbcon.php';

$info = $_POST['info'];
$sub = $_POST['sub_title'];
$tit = $_POST['title'];
$Aut = $_POST['Author'];
$imge = $_POST['image'];
$my_date = date('Y-m-d');



$sql = "INSERT INTO info_news (news_title,news_short_description,news_full_content,news_author,news_published_on,image) 
        VALUES ('$tit','$sub','$info ','$Aut','$my_date','$imge')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>