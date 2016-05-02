
  <?php include 'header.php';?>
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
      $sql="SELECT * FROM teachers";
      $rs=mysql_query($sql);
    ?>
     <table align="center" style="width:100%">
       <tr>
        <td>S.no.</td><td>Name</td><td>Class Taught</td><td>Subject</td><td>Operation</td><td>Add Image</td><td>Image</td>
       </tr>
    <?php
     while($row = mysql_fetch_array($rs))
     {
  ?>  
       <tr>
         <td><?php echo $row["id"];?></td><td><?php echo $row["Name"];?></td><td><?php echo $row["class"];?></td><td><?php echo $row["sub_tght"];?></td><td><a href="update_tea.php?id=<?php echo $row['id'];?>">Edit</a></td>
         <td><a href="album_teach.php?id=<?php echo $row['id'];?>" align="center" style=" display:block;padding:10px">Edit Image</a></td><td><img src="uploads/<?php echo $row["name"];?>" width="50px"></td>
       </tr> 
    <?php
      }
      ?>    
     </table><br><br>
     <div align=center><a href='#'>ABC School</a></div>   
   </body>
 </head>
</html>