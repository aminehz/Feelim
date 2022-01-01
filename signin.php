<?php
session_start();
if(isset($_POST['username']) && isset($_POST['userpassword']))
{
    
    include('config.php');
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['userpassword']));
    
    if($username !== "" && $password !== "")
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