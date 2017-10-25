<?php


$userid = $_POST["userid"];
$password = $_POST["password"];


$con = mysql_connect("localhost","root","");


if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysql_select_db("my_dbname",$con);

$result = mysql_query("SELECT userid,password FROM users WHERE userid= $userid and password=$password");

$row = mysql_fetch_array($result);

if($row["userid"]==$userid && $row["password"]==$password)

    echo"You are a validated user.";

else
    echo"Sorry, your credentials are not valid, Please try again.";
?>