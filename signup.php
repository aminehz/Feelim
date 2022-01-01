<?php 
session_start();
if(isset($_POST['signupusername']) && isset($_POST['signupemail'])&& isset($_POST['signuppassword']) && isset($_POST['signupcpassword']))
{
include('dbConfig.php');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['signupusername'])); 
$useremail = mysqli_real_escape_string($db,htmlspecialchars($_POST['signupemail']));
$userpassword = mysqli_real_escape_string($db,htmlspecialchars($_POST['signuppassword']));

if($username !== "" && $useremail !== "" && $userpassword!=="")
{
    $sql = "SELECT count(*) FROM user where 
          username = '".$username."' and password = '".$password."' ";
    $exec_sql = mysqli_query($db,$sql);
    $reponse      = mysqli_fetch_array($exec_sql);
    $count = $reponse['count(*)'];
    if($count!=0) 
    {
       $_SESSION['username'] = $username;
       header('Location: question.html');
    }
    else
    {
      
        header('Location: signing.html'); 
    }
}
else
{
   header('Location: signing.html'); 
}
}
else
{
header('Location: signing.html');
}
mysqli_close($db); 
?>
}

?>