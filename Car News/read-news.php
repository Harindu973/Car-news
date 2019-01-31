

<html>
<head>
    <title>Welcome to news channel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">

        <div class="welcome">
            <h1>Latest news</h1>
            <p>Welcome to the car news site. <em>We never stop until you are aware.</em></p>
            <a href="index.php">return to home page</a>
        </div>

        <div class="news-box">

            <div class="news">
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


                    $id_article = (int)$_GET['news_id'];

                    if ( !empty($id_article) && $id_article > 0) {
                        // Fecth news
                        $article = getAnArticle( $id_article);
                        $article = $article[0];
                    }else{
                        $article = false;
                        echo "<strong>Wrong article!</strong>";
                    }

                    $other_articles = getOtherArticles( $id_article);

                ?>

                <?php if ( $article && !empty($article) ) :?>

                <h2><?= stripslashes($article->news_title) ?></h2>
                <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                <div>
                    <?= stripslashes($article->news_full_content) ?>
                </div>
            <?php else:?>

                <?php endif?>
            </div>

            <hr>
            <h1>Other articles</h1>
            <div class="similar-posts">
                <?php if ( $other_articles && !empty($other_articles) ) :?>

                <?php foreach ($other_articles as $key => $article) :?>
                <h2><a href="read-news.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
                <p><?= stripslashes($article->news_short_description) ?></p>
                <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
                <?php endforeach?>

                <?php endif?>

            </div>

        </div>

        <div class="footer">
            A.DH.UTHTHARA <?= date("Y") ?> - all rights reserved.
        </div>

    </div>
</body>
</html>