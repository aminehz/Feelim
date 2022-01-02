<?php 
session_start();
if(isset($_POST['signupusername']) && isset($_POST['signupemail'])&& isset($_POST['signuppassword']) && isset($_POST['signupcpassword']))
{
include('config.php');
$username = mysqli_real_escape_string($db,htmlspecialchars($_POST['signupusername'])); 
$useremail = mysqli_real_escape_string($db,htmlspecialchars($_POST['signupemail']));
$userpassword = mysqli_real_escape_string($db,htmlspecialchars($_POST['signuppassword']));

if($username !== "" && $useremail !== "" && $userpassword!=="")
{   $req="SELECT count(*) FROM user where 
    username = '".$username."' and password = '".$userpassword."' ";
    $exec_req = mysqli_query($db,$req);
    $answer= mysqli_fetch_array($exec_req);
    $countt = $answer['count(*)'];
        if($countt==0) 
        {
            $sql = "INSERT INTO usersig values ('".$username."','".$useremail."','".$userpassword."' )";
            $exec_sql = mysqli_query($db,$sql);
            $reponse  = mysqli_fetch_array($exec_sql);
            header('location:signing.html');
        }else{
            print("le username deja valide");
        }

   
   
}

}
mysqli_close($db);
?>