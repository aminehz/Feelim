<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$data="feelim";
$serverport="3308";
$conn=new mysqli($servername,$username,$password,$data);
if($conn->connect_error)
{
    echo "failed to connect to mysql :" .$conn->connect_error;
}else 
{ //echo "Connection succeeded";
$sql="INSERT INTO user (id,user_id,username,password,email,user_tag,tag_id) values(,,'amine','amine123','em@poly',,)";
$result=$conn->query($sql);
/*$row=$result->fetch_assoc();
printf("%s\n %s",$row["question"],$row["answer_id"]);
$result->free_result();
$conn->close();
}
/*if(!isset($_POST['username'])||!isset($_POST['userpassword'])|| empty($_POST['username']))
{
header("location:signing.html");
} //elseif($_POST['username']=$POST)*/

}


?>