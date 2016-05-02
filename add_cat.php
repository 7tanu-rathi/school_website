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

?>

<?php
 if(isset($_POST['submit']))
  {
       $cat=$_POST["cat"];
   $sql="INSERT INTO image(cat)
        VALUES ('$cat')";

  mysql_query($sql);
  }
  ?>
 <?php include 'header.php';?>
 <h2 text align="center" style="color:white"><i>Add Category</i></h2>

<form method="post">
<table style="width:100%">
 <tr>
   <td>Category</td><td><input type="text" size="100" name="cat" placeholder="eg. annual function/feast day" ><td><input type="submit" name="submit" value="submit" padding="10px"></td>
 </tr>
</table>
</form>
</body>
</html>
