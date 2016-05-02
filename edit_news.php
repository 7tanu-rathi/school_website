<?php include 'header.php';?>

<?php
  $conn=mysql_connect("localhost","root","");
  if(!$conn)
  {
  	die("connection cannot be established");
  }
  else
  {
  	$db=mysql_select_db("astro",$conn);
  	if(!$db)
  	{
  	   die("database cannot be connected");
  	}
  }
  $id=$_GET["id"];
  $news=$des="";

  	$news=$des="";
  	$news=$_POST["news"];
  	$des=$_POST["des"];
  	$sql="SELECT * FROM news 
          WHERE id=$id";
    $rs=mysql_query($sql) ;
    $row=mysql_fetch_array($rs);  
  ?>
<form action="update_news.php">
<table style="width:100%; color:black">
	<tr>
		<td>News Heading</td><td><input type="text" size="200" name="news" value="<?php echo $row["heading"];?>" /></td>
	</tr>
	<tr>
		<td>News</td><td><textarea rows="4" cols="150" name="des" value="<?php echo $row["content"];?>"></textarea></td>
	</tr>
	<tr>
		<td>Enter Date</td><td><input type="date" name="news_date"/></td>
	</tr>
</table><br><br>		
<input type="submit" name="submit" value="submit" >
</form>
</body>
