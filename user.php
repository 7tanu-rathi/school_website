<?php
    $name=$pwd="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["username"];
        $pwd=$_POST["password"];

        $conn=mysql_connect("localhost","root","");
        if(!$conn)
        die("Connection could not be established");
        $db=mysql_select_db("login");
        if(!$db)
        die("Database not connect");

    $sql="SELECT * FROM username ";
    $rs=mysql_query($sql);
    $row=mysql_fetch_array($rs);

        if($row["user"]==$name && $row["password"]==$pwd)
        {
             header("location:admin.php");
        }
        else
        {
            header("location:index.php?msg=1");
        }
    }
    ?>