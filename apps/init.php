<?php

start_session();

$_SESSION['user_id']=1;

$db = new PDO('mysql:dbname=users;host=localhost','root','bhargav');
if(!isset($_SESSION['user_id'])){
die("You are not signed in!");
}

?>