<!DOCTYPE HTML>
<html>
 <head>
  <title>List of the classes</title>
  <meta charset="UTF=8">
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
     }

     body
     {
      margin:10px;
      padding:5px;
      width:100%;
     }
     tr:nth-child(even) {background: #FFF}
     tr:nth-child(odd) {background: #CCC}
   </style>
   <body style="text-align:center">
   <div class="main">
   <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1 align="left"><a href="index.html"><span>ABC</span>    School<small>where the mind is without fear</small></a></h1>
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
          <li class="active"style="color:white"><a href="cls_list.php">List of students</a></li>
          <li><a href="image.php"style="color:white">Albums</a></li>
          <li><a href="news.php"style="color:white">News</a></li>
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
      $sql="SELECT * FROM cls_list";
      $rs=mysql_query($sql);
    ?>
     <table align="center" style="width:100%">
       <tr>
        <td>S.no.</td><td>Class</td><td>Operation</td>
       </tr>
    <?php
     while($row = mysql_fetch_array($rs))
     {
  ?>  
       <tr>
         <td><?php echo $row["S.no."];?></td><td><?php echo $row["class"];?></td><td><a href="form.php?id=<?php echo $row['id'];?>">Open the student list</a></td>
       </tr> 
    <?php
      }
      ?>    
     </table>   
   </body>
 </head>
</html>