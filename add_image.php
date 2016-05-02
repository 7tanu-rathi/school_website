<?php include 'header.php';?>

<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="cat_id" value="<?php echo $_GET["id"];?>">

    <p style="color:white">Select image to upload:</p>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>