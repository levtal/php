 <?php
if(!empty($_FILES['file'])){
	foreach($_FILES['file']['name'] as $key => $name){
		if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key], "files/{$name}")){
			$uploaded[] = $name;
		}
	}

	if(!empty($_POST['ajax'])){
		die(json_encode($uploaded));
	}
}
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="upload.js"></script>
	<style>
		#upload_progress { display: none;}
	</style>
	<title>File Upload</title>
</head>
<body>
	<div id="uploaded">
		<?php
		if(!empty($uploaded)){
			foreach($uploaded as $name){
				echo '<div><a href="files/', $name, '">', $name, '</a></div>';
			}
		}
		?>
	</div>
	<div id="upload_progress"></div>
	<div>
		<form action="" method="post" enctype="multipart/form-data">
			<div>
				<input type="file" id="file" name="file[]" multiple="multiple">
				<input type="submit" id="submit" value="Upload">
			</div>
		</form>
	</div>
</body>
</html>