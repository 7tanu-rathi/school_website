<!DOCTYPE HTML>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <link href="style.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
 <style>
  table 
     {
       border-collapse: collapse;
       border-radius: 10px;
       text-align: center;
       }

     table, td, tr 
     {
      border: 1px solid black;
      padding:20px;
      border-radius:5px;
      align-content:center;
     }

     body
     {
      margin:10px;
      padding:5px;
      width:100%;
      font color:black;
     }
     tr:nth-child(even) {background: #FFF}
     tr:nth-child(odd) {background: #CCC}
 </style>
<head>

<body style="text-align:center">
   <div class="main">
   <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1 align="left"><a href="index.html" align=left><span>ABC</span>    School<small>where the mind is without fear</small></a></h1>
      </div>
      <div class="searchform">
        
        <div align=right style="color:white">You are logged in as an administrator</div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <!--<div class="hbg">
    <div class="hbg_resize">-->
      <div class="menu_nav">
        <ul>
          <li><a href="admin.php"style="color:white">Administration</a></li>
          <li><a href="teacher.php"style="color:white">Teaching Staff</a></li>
          <li><a href="cls_list.php"style="color:white">List of students</a></li>
          <li><a href="image.php"style="color:white">Albums</a></li>
          <li class="active"><a href="news.php"style="color:white">News</a></li>
        </ul>
      </div>
<h2 align="center" style="color:white"> Insert news</h2>
<?php
  $conn=mysql_connect("localhost","root","");
  if(!$conn)
  {
  	die("connection cannot be established");
  }
  else
  {
  	$db=mysql_select_db("login",$conn);
  	if(!$db)
  	{
  	   die("database cannot be connected");
  	}
  }
  $news=$des="";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
  	$news=$des="";
  	$news=$_POST["news"];
  	$des=$_POST["des"];
  	$news_date=$_POST['news_date'];
  	$news_date2=explode("/",$news_date);
    //print_r($news_date2);exit;
  	$news_date3="$news_date2[2]-$news_date2[0]-$news_date2[1]";
    //$news_date4=date($news_date,'%d-%m-%y');
    //echo $news_date4;
  	$sql="INSERT INTO news(heading,content,date)
        VALUES ('$news','$des','".$news_date3."')";
    mysql_query($sql) ;   
  }
  //header("location:news.php");
?>
<form method="post">
<table style="width:100%">
	<tr>
		<td>News Heading</td><td><input type="text" size="200" name="news" /></td>
	</tr>
	<tr>
		<td>News</td><td><textarea rows="4" cols="150" name="des"></textarea></td>
	</tr>
	<tr>
		<td>Enter Date</td><td><input type="text" id="datepicker" name="news_date"/></td>
	</tr>	
</table><br><br>		
<input type="submit" name="submit" value="submit" >
</form>
</body>

