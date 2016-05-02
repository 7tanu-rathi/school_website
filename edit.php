<!DOCTYPE HTML>
<html>
 <head>
     <meta charset="UTF-8">
     <style>
        table, td{text align: "center"; border:1px solid blue; border-radius:5px;}
        body{ margin:auto;padding:auto;width:1024px;}
        tr, td
         {
           padding: 8px;
           text-align:center;
         }

     </style>
  </head>
  <body>
  <?php

    $connect = mysql_connect("localhost","root","");
        if(!$connect)
        die("Server Not connected");
        $db = mysql_select_db("login",$connect);
        if(!$db)
        die("Database not Connected");

      $id = $_GET["id"];
      
      $sql = "select * from registration where id=$id";
      $rs = mysql_query($sql);
      $row = mysql_fetch_array($rs)
  ?>
    <form method="post" action="update.php">
      <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
       <table style="width:100%">
        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="<?php echo $row["name"];?>" size="100"></td>
        </tr>
        <tr>
          <td>Class</td>
          <td><input type="text" name="cls_nm" value="<?php echo $row["cls_nm"];?>" size="100"></td>
        </tr>
       </table><br>
       <input type="submit" name="submit" value="submit">
     </form>  
  </body>
</html>