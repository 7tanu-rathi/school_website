<!DOCTYPE HTML>
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
   <body style="text-align:right">
   <div class="main">
   <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1 align="left"><a href="index.html" align=left><span>ABC</span>    School<small>where the mind is without fear</small></a></h1>
      </div>
      <div class="searchform">
        <!--<form id="formsearch" name="formsearch" method="post" action="#">
          <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" placeholder="Search" type="text" />
          </span>
        </form>-->
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
          <li class="active"><a href="image.php" style="color:white">Albums</a></li>
          <li><a href="news.php" style="color:white">News</a></li>
        </ul>
      </div>
    </div>
  </div>

  <?php
      $conn=mysql_connect("localhost","root","");
      if(!$conn)
      {
      	die("Connection could not be established");
      }
      $db=mysql_select_db("login",$conn);
      if(!$db)
      {
      	die("Database cannot be connected");
      }
      $sql="SELECT * FROM image";
      $rs=mysql_query($sql);
    ?>
    <h2 text align="center" style="color:white"><i>Gallery</i></h2>
  <table align="center" style="width:100%">
  <tr>
    <a href="add_cat.php" align="right" style="color:white; display:block;padding:10px">Add Category</a>
  </tr>
   <tr>
     <td>S.no</td><td>Category</td><td>Add Image</td>
   </tr>
   <?php
     while($row = mysql_fetch_array($rs))
     {
  ?>  
       <tr>
         <td><?php echo $row["id"];?></td>
         <td><?php echo $row["cat"];?></td>
         <td><a href="album.php?id=<?php echo $row['id'];?>" align="center">Add Image</a></td>
       </tr> 
    <?php
      }
      ?>    
  </table>
  </form>
 </body>
</html>