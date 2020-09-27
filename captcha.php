<?php 

    $image = imagecreate(100, 35);
	$background = imagecolorallocate($image,255, 255, 255);
	$color = imagecolorallocate($image, 0, 0, 0);
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$all = substr(str_shuffle($chars), 0, 9);
	imagefill($image, 50, 0, $background);
	imagestring($image, 80, 10, 10, $all, $color);
	header('Content-type: image/png');
	imagepng($image);

?>
