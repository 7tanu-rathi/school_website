<?php

$name=$desig="";
$name=$_POST["name"];
$desig=$_POST["designation"];

$connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("login",$connect);
  if(!$db)
  die("Database not Connected");

  $id = $_POST["id"];

  $sql="UPDATE admin 
        SET name='$name',designation='$desig'
        WHERE id=$id";
  mysql_query($sql);

  header("location:admin.php");

?>