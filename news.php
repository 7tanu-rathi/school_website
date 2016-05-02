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
<head>

<body style="text-align:right">
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
  <a href="news_insert.php" align="right" style="color:white; display:block;padding:10px">Add news</a>
  <?php
    $conn=mysql_connect("localhost","root","");
    if(!$conn)
    {
      die("connection cannot be established");
    }
    else
    {
      $db=mysql_select_db('login',$conn);
      if(!$db)
      {
        die("Database cannot be connected");
      }
    }

    $sql="SELECT * FROM news"; 
    $rs=mysql_query($sql);
  ?>
  <table style="width:100%">
    <tr>
      <td>S.no.</td><td>News Heading</td><td>Date</td><td>Operation</td>
    </tr>
    <?php
        while($row=mysql_fetch_array($rs))
        {?>
            <tr>
              <td><?php echo $row["id"];?></td><td><?php echo $row["heading"];?></td><td><?php echo date('d F,Y',strtotime($row["date"]));?></td><td><a href="edit_news.php?id=<?php echo $row["id"] ;?>">Edit</a>&nbsp;&nbsp;
              <a href="delete_news.php?id=<?php echo $row["id"] ;?>">Delete</a></td>
            </tr>
            <?php
        }
      ?>
    <tr>
    </tr>  
  </table>      
</body>
     