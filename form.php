<!DOCTYPE HTML>
<html>
<head>
	<title>Form</title>
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
</head>
<body style="text-align:center">
<div class="main">
   <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html"><span>ABC</span>    School<small>where the mind is without fear</small></a></h1>
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
  <div class="hbg">
    <div class="hbg_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="admin.php">Administration</a></li>
          <li><a href="teacher.php">Teaching Staff</a></li>
          <li class="active"><a href="cls_list.php">List of students</a></li>
          <li><a href="image.php">Albums</a></li>
        </ul>
      </div>
    </div>
  </div>
<?php
   $connect=mysql_connect("localhost","root","");
   if(!$connect)
    die("Connection could not be established");
   $db=mysql_select_db("login");
   if(!$db)
    die("Database cannot be connected");
    $id=$_GET["id"];

   $sql="SELECT id, name, cls_nm FROM class ";
   $rs=mysql_query($sql);
?>

<table align="center" style="width:76%">
   <tr>
     <td>S.no.</td><td>Name</td><td>Class</td><td>Operation</td>
   </tr>
   <?php
    while($row = mysql_fetch_array($rs))
    {
  ?>
  <tr>
      <td><?php echo $row["id"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["cls_nm"];?></td><td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
  </tr>
  <?php
    }
    ?> 
</table>

</body>
</html>