<?php 
	
	//header("content-type: image/jpg");
	//header("Content-Disposition: attachment; filename='city_".$i.".jpg'");
	 $content = file_get_contents($_POST['address']);
	file_put_contents($_POST['name'].'.jpg', $content);
?>