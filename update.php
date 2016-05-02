<?php

$name=$cls_nm="";
$name=$_POST["name"];
$cls_nm=$_POST["cls_nm"];

$connect = mysql_connect("localhost","root","");
  if(!$connect)
  die("Server Not connected");
  $db = mysql_select_db("login",$connect);
  if(!$db)
  die("Database not Connected");

  $id = $_POST["id"];

  $sql="UPDATE class 
        SET cls_nm='$cls_nm',name='$name'
        WHERE id=$id";
  mysql_query($sql);

  header("location:form.php");

?>