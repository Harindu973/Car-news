<html>
<head>
<title>Welcome to news channel</title><link rel="stylesheet" type="text/css" href="style.css">
<style>
.mySlides {display:none;}
</style>


</head>
<body>


    <div class="container">
    
        <div class="news-box">
        <img src="c1.jpg" align="center" style="width:725px;height:150px;">
        </div>

    
<form name="form1" method="POST" >

           <div class="welcome">
           <h1>Latest news</h1>
           <p>Welcome to the car news site. <em>We never stop until you are aware.</em></p>
          
           <div>
  <img class="mySlides" src="a.jpg" style="width:100%">
  <img class="mySlides" src="b.jpg" style="width:100%">
  <img class="mySlides" src="c.jpg" style="width:100%">
  <img class="mySlides" src="d.jpg" style="width:100%">
           </div>
        
    
    


<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</div>



        <div class="news-box">

            <div class="news">

                <img src="p2.jpg" align="center" style="width:700px;height:200px;">
                <h2><a href="read-news.php?newsid=1">More Toyota sports cars and hot GR versions in pipeline</a></h2>
                
                <img src="c2.jpg" align="center" style="width:200px;height:100px;">
                <p> GR Supra is the first in a new line of performance-inspired models that could include a reborn MR2</p>
                <span>published on 29 January 2019 by  Autocar</span>
               
            </div>
        </div>

<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "news";

                
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT * FROM info_news ORDER BY news_id DESC LIMIT 10";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                      $s=$row['image'];
                      echo $row['image']; 
                       echo '<div class="news-box">

                <div class="news">
                <h2><a href="read-news.php?newsid=2">' . $row["news_title"] .'</a></h2>' . '<img src="'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">' .
                  '<p>'. $row["news_short_description"] . '</p>
                <span>published on ' . $row["news_author"] . 'by' . $row["news_published_on"]  . '</span>
                </div>
              </div>' ;
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>













        <div class="news-box">

            <div class="news">
                <h2><a href="read-news.php?newsid=2">Mercedes-AMG A35 2019 UK review</a></h2>
                <img src="c3.jpg" align="center" style="width:200px;height:100px;">
                <p>its new entry-level model, AMG hopes to attract a generation of loyal customers. We've driven the A35 in the UK for the first time to see whether it sets the right tone</p>
                <span>published on 28 January 2019 by Rachel Burgess</span>
            </div>
         </div>

   <div class="news-box">

            <div class="news">
                <h2><a href="read-news.php?newsid=3">New 2019 Renault Clio goes upmarket in first interior images</a></h2>
                <img src="c4.jpg" align="center" style="width:200px;height:100px;">
                <p>Renault reveals tech-laden Mk5 Clio, with quality and ease of use part of design boss's "interior revolution"</p>
                <span>published on 28 January 2019 by Rachel Burgess</span>
            </div>
</div>

         <div class="news-box">

            <div class="news">
                <h2><a href="read-news.php?newsid=4">Audi A1 vs Mini Cooper vs Ford Fiesta Vignale: high-spec hatchback shoot-out</a></h2>
                <img src="c5.jpg" align="center" style="width:200px;height:100px;">
                <img src="c6.jpg" align="center" style="width:200px;height:100px;">
                <img src="c7.jpg" align="center" style="width:200px;height:100px;">
                <p>If your supermini budget stretches to £20k you’ll find some appealingly plush downsized marvels dripping with big-car appeal. We try three for size
</p> 

                <span>published on 26 January 2019 by Simon Davis</span>
            </div>

        </div>



        <div class="footer">
           A.D.H.Uththara <?= date("Y") ?> - all rights reserved.
        </div>

    </div>


    
</body>
</html>