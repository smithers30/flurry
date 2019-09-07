<?php
	// Read the All Methods area of the documentation
	// To see all the options that this class offers
	// Sanitize image data
	$img = $_POST["imgData"];
	$img = str_replace("data:image/png;base64,", "", $img);
	$img = str_replace(" ", "+", $img);
	$vidWidth = $_POST["videoWidth"];
	$vidHeight = $_POST["videoHeight"];
	$vidName = $_POST["vidName"];
	$frameCount = $_POST["frameCount"];
	$imgType = $_POST["imgType"];
	$imgPath = "images/" . $vidName . "_" . $frameCount . "." . $imgType;

	function int($input) {
		return (int)preg_replace("/[^\d]+/", "", $input);
	}

	// Save decoded image to file
	file_put_contents($imgPath, base64_decode($img));

	// Execute the command
	// $output = null;
	// $status = null;

	// Resize oversampled canvas drawing
	// exec(escapeshellcmd("imagemagick " . $imgPath . " -resize " . $vidWidth . "x" . $vidHeight . " -filter Lanczos -alpha off " . $imgPath));

	// verify that our image has been resized
	// list($width, $height) = getimagesize($imgPath);

	// if ($width == $vidWidth && $height == $vidHeight) {
	// 	echo("pngquant --quality=60-80 --force --strip --ext _seq_" . $_POST["frameCount"] . "." . $imgType . " " . $imgPath);
	// 	// exec(escapeshellcmd("pngquant --quality=60-80 --force --strip --ext _seq.png" . $imgPath . " images/" . $vidName . "_seq_" . $_POST["frameCount"] . "." . $_POST["imgType"]), $output, $status);

	// 	// echo($status);
	// }
	//smurfs-lost-village-trailer-3_h1080p.mov
	//ffmpeg -r 30 -f image2 -i bunny-vid_%01d.png -vf scale=1280:720 -codec:v libx264 output.mp4
	//ffmpeg -r 30 -f image2 -i bunny-vid_%01d.png -codec:v libx264 output.mp4
?>