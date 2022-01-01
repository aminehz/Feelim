<?php
include 'dbConfig.php';

$tag1 = $_POST['question1'];
$tag2 = $_POST['question2'];
$tag3 = $_POST['question3'];
$tag4 = $_POST['question4'];
$tag5 = $_POST['question5'];

$sql = 'SELECT * FROM film WHERE JSON_CONTAINS(movie_tag, JSON_ARRAY('.$tag1.','. $tag2.','. $tag3.','. $tag4.','. $tag5.'))';
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "tags: " . $row["tags"][1];
//   }
// } else {
//   echo "0 results";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moviegrid</title>
    <link rel="stylesheet" href="moviegrid.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
</head>
<body>
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
    <div class="title">
      <h1>Recommended List</h1>
    </div>
    <div class="name">
      <form action="saveList.php" method="POST">
        <input type="submit" class="button" value="Save">
        <input type="text" name="listName" placeholder="Name the list" class="input">
        <?php
        $filmIds="[";
           while($row = $result->fetch_assoc()) { 
            $filmIds .= strval($row["id_film"]) . ",";
          }
          $filmIds .= "]";
          echo '<input  name="films" type="number" value='.$filmIds.' hidden/>';
        ?>
      </form>
    </div>
    <section class="main-container" >
          <div class="box">
            <?php
                while($row = $result->fetch_assoc()) {
                  echo '<a href="movie.php?id='.$row["id_film"].'&name='.$row["name"].'&description='.$row["description"].'&tags='.$row["movie_tag"].'">'.$row["name"].'</a>';
                }
            ?>       
          </div>
    </section>
</body>
</html>