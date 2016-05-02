<!DOCTYPE HTML>
<html>
 <head>
  <title>Administration</title>
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
   <body style="text-align:center">
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
          <li class="active"><a href="admin.php" style="color:white" class="button">Administration</a></li>
          <li><a href="teacher.php"style="color:white">Teaching Staff</a></li>
          <li><a href="cls_list.php"style="color:white">List of students</a></li>
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
      $sql="SELECT * FROM admin";
      $rs=mysql_query($sql);
    ?>
    <h2 text align="center" style="color:white"><i>Administration</i></h2>
     <table align="center" style="width:100%">
       <tr>
        <td>S.no.</td><td>Name</td><td>Designation</td><td>Operation</td>
       </tr>
    <?php
     while($row = mysql_fetch_array($rs))
     {
  ?>  
       <tr>
         <td><?php echo $row["id"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["designation"];?></td><td><a href="update_ad.php?id=<?php echo $row['id'];?>">Edit</a></td>
       </tr> 
    <?php
      }
      ?>    
     </table><br><br> 
     <div align=center><a href='#'>ABC School</a></div> 
   </body>
 </head>
</html>