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
$sql2="INSERT INTO user (id,username,password,email,user_tag,id_tag) values(4,'aminee','aamine123','em@poly','Drama',11)";
$sql="SELECT * FROM user where username='aminee'";
$result=$conn->query($sql);
$result2=$conn->query($sql2);
$row=$result->fetch_assoc();
//$result2=$conn->query($sql2);
//$row2=$result2->fetch_assoc();
printf("%d\n%s%s%s%s%d\n",$row["id"],$row["username"],$row["password"],$row["email"],$row["user_tag"],$row["id_tag"]);
$result->free_result();
$conn->close();
}
/*if(!isset($_POST['username'])||!isset($_POST['userpassword'])|| empty($_POST['username']))
{
header("location:signing.html");
} //elseif($_POST['username']=$POST)*/




?>