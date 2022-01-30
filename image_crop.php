<?php 
if(isset($_POST['submit']))
{
	$filename= $_FILES['file']['name'];
	$ext = pathinfo($filename,PATHINFO_EXTENSION);
	$tmp_name= $_FILES['file']['tmp_name'];
	$dir = "uploaded/";

	if(!is_dir($dir)){
		mkdir($dir);
	}
	if(move_uploaded_file($tmp_name,$dir.$filename)){
		echo "move_uploaded_file";
	if(file_exists($filename)){
		$img = imagecreatefromjpeg($filename);
		$imgcrop = imagecrop($img, ['x' => 0, 'y' => 0, 'width' => 655, 'height' => 455]);
		if ($imgcrop !== FALSE) {
			imagepng($imgcrop, date('YmdHis').'.jpg');
			imagedestroy($imgcrop);
			echo "Image cropped successfully";
		}
		imagedestroy($img);

	}
}
} 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post"enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit"value="submit">
	</form>
</body>
</html>