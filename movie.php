<?php 
$movieId = $_GET['id'];
$movieName = $_GET['name'];
$movieDescription = $_GET['description'];
$movieTags = explode(",",str_replace(array('[',']'),'',$_GET['tags']));




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="movie.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="header">
            <div id="logo">
                <h1>Feelim</h1>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="Start.html">Search</a></li>
                    <li><a href="lists.html">Lists</a></li>
                    <li><a href="profile.html">Profile</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <div class="banner">
        <div class="content">
            <h1><?php echo $movieName ?></h1>
            <h4>
                <span>2016</span>
                <span>2h 7m</span>
                <span><?php echo $movieTags[0] ?></span>
                <span>History</span>
                <span>Activism</span>
            </h4> 
            <span class="imdbRatingPlugin" data-user="ur147635745" data-title="tt4846340" data-style="p2"><a href="https://www.imdb.com/title/tt4846340/?ref_=plg_rt_1"><img src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/images/imdb_38x18.png" alt=" Hidden Figures
                (2016) on IMDb" />
                </a></span><script>(function(d,s,id){var js,stags=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}js=d.createElement(s);js.id=id;js.src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js";stags.parentNode.insertBefore(js,stags);})(document,"script","imdb-rating-api");</script>
            <p>
                <?php echo $movieDescription ?>
            </p>
            <div class="buttons">
                <a href="#">Play Trailer</a>
                <a href="#">Watch Now</a>
            </div>
        </div>
    </div>
</body>
</html>