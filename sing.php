<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$data="Feelim";
$serverport="3308";
$conn=new pdo($servername,$username,$password,$data,$serverport);
$sql='SELECT * FROM film';
$list_F=$conn->prepare($sql);
$L=$list_F->FetchAll;
if(!isset($_POST['username'])||!isset($_POST['userpassword']|| empty($_POST['username'])))
{
header("location:signing.html");
} elseif($_POST['username']=$POST)
echo "bonjour";



?>