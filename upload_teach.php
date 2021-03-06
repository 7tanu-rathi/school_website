<?php include 'header.php';?>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $image_name=$_FILES["fileToUpload"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die("Connection cannot be established");
}
else
{
	$db=mysql_select_db(login,$conn);
	if(!$db)
	{
		die("Database cannot be connected");
	}
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$name_id=$_POST["name_id"];
$sql="INSERT INTO image_teach(img_nm)
      VALUES ('".$image_name."')";
      mysql_query($sql);
}      
?>