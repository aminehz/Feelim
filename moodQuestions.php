<?php
include 'dbConfig.php';

$tag1 = $_POST['question1'];
$tag2 = $_POST['question2'];
$tag3 = $_POST['question3'];
$tag4 = $_POST['question4'];
$tag5 = $_POST['question5'];

$sql = 'SELECT * FROM film WHERE JSON_CONTAINS(movie_tag, JSON_ARRAY('.$tag1.','. $tag2.','. $tag3.','. $tag4.','. $tag5.'))';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: ". $row["id_film"]. " - Name: " . $row["name"];
  }
} else {
  echo "0 results";
}

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "tags: " . $row["tags"][1];
//   }
// } else {
//   echo "0 results";
// }

?>