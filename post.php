<?php 
	$content = file_get_contents($_POST['address']);
	if (!file_exists("images/".$_POST['sizeH'].'x'.$_POST['sizeV'])) {
		mkdir("images/".$_POST['sizeH'].'x'.$_POST['sizeV'], 0777, true);
	}
	if (!file_exists("images/".$_POST['sizeH'].'x'.$_POST['sizeV']."/".$_POST['path_name'])) {
		mkdir("images/".$_POST['sizeH'].'x'.$_POST['sizeV']."/".$_POST['path_name'], 0777, true);
	}
	file_put_contents("images/".$_POST['sizeH'].'x'.$_POST['sizeV']."/".$_POST['path_name']."/".$_POST['name'].'.jpg', $content);
?>