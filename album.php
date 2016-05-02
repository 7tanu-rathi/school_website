<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link href="style.css" rel="stylesheet" type="text/css" />
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
 </head>
 <?php include 'header.php';?>

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
   		die("database not connected");
   	}
   }

   $id=$_GET["id"];
   $cat_sql="SELECT * FROM image WHERE id='$id'";
   $cat_rs=mysql_query($cat_sql);
   $cat_row=mysql_fetch_array($cat_rs);
   //echo $cat_row["cat"];
   
   $sql="SELECT * FROM image_list
         WHERE cat_id=$id";
    $rs=mysql_query($sql);     
    //$row=mysql_fetch_array($rs);
    //echo $row["name"];
 ?>
   <h2 text align="center" style="color:white"><i><?php echo $cat_row["cat"]?> Images</i></h2>
     <table style="width:100%">
    <tr>
      <a href="add_image.php?id=<?php echo $_GET["id"];?>" text align="right" style="color:white;padding:10px">Add Image</a>
    </tr>
     <tr>
       <td>S.no</td><td>Image_name</td><td>Image</td>
     </tr>
      <?php
        while($row=mysql_fetch_array($rs))
        {?>
            <tr>
              <td><?php echo $row["id"];?></td><td><?php echo $row["name"]?></td><td><img src="uploads/<?php echo $row["name"];?>" width="50px"></td>
            </tr>
            <?php
        }
      ?>
   </table>
  </body>
</html>