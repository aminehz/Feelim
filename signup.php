<?php 
session_start();
if(isset($_POST['signupusername']) && isset($_POST['signupemail'])&& isset($_POST['signuppassword']) && isset($_POST['signupcpassword']))
{
include('config.php');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['signupusername'])); 
$useremail = mysqli_real_escape_string($db,htmlspecialchars($_POST['signupemail']));
$userpassword = mysqli_real_escape_string($db,htmlspecialchars($_POST['signuppassword']));
$usercpassword=mysqli_real_escape_string($db,htmlspecialchars($_POST['signupcpassword']));

if($username !== "" && $useremail !== "" && $userpassword!=="")
{   if($userpassword==$usercpassword)
    {
    $req="SELECT count(*) FROM user where 
    username = '".$username."' and password = '".$userpassword."' ";
    $exec_req = mysqli_query($db,$req);
    $answer= mysqli_fetch_array($exec_req);
    $countt = $answer['count(*)'];
        if($countt==0) 
        {
            $sql = "INSERT INTO user values (0,'".$username."','".$userpassword."','".$useremail."' )";
            $exec_sql = mysqli_query($db,$sql);
            $reponse  = mysqli_fetch_array($exec_sql);
            header('location:signing.html');
        }else{
            include('alert.html');
            
        }
    }else {
        include('alert2.html');
    }
   
   
}

}
mysqli_close($db);
?>