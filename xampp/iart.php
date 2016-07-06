<?php
	include "langsettings.php";

	// Copyright (C) 2002/2003 Kai Seidler <oswald@apachefriends.org>
	//
	// This program is free software; you can redistribute it and/or modify
	// it under the terms of the GNU General Public License as published by
	// the Free Software Foundation; either version 2 of the License, or
	// (at your option) any later version.
	//
	// This program is distributed in the hope that it will be useful,
	// but WITHOUT ANY WARRANTY; without even the implied warranty of
	// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	// GNU General Public License for more details.
	//
	// You should have received a copy of the GNU General Public License
	// along with this program; if not, write to the Free Software
	// Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.

	if (empty($_GET['text'])) {
		$_GET['text'] = "ceci n est pas un ami d apache";
	}
	if (empty($_GET['egal'])) {
		if (empty($_GET['art'])) {
			$_GET['art'] = rand(1000, 9999);
		}
		$_GET['artn'] = rand(1000, 9999);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
		<link href="xampp.css" rel="stylesheet" type="text/css">
		<title></title>
	</head>

	<body>
		&nbsp;<p>
		<h1><?php echo $TEXT['iart-head']; ?></h1>

		<img width="520" height="320" src="iart.php?egal=<?php echo $_GET['art']; ?>&amp;text=<?php echo urlencode($_GET['text']);?>" alt=""><p class="small">
		<?php echo $TEXT['iart-text1']; ?><p>
		<form name="ff" action="iart.php" method="get">
			<input type="text" name="text" value="<?php echo $_GET['text']; ?>" size="30">
			<input type="submit" value="<?php echo $TEXT['iart-ok']; ?>">
			<input type="hidden" name="artn" value="<?php echo $_GET['artn']; ?>">
		</form>
		<p>
		<?php
			if (isset($_GET['source']) && ($_GET['source'] == "in")) {
				include "code.php";
				$beispiel = $_SERVER['SCRIPT_FILENAME'];
				pagecode($beispiel);
			} else {
				echo "<p><br><br><h2><u><a href=\"$_SERVER[PHP_SELF]?source=in\">".$TEXT['srccode-in']."</a></u></h2>";
			}
		?>
	</body>
</html>
<?php
		exit;
	}

	$fontfile = ".\AnkeCalligraph.TTF";

	$size = 9;
	$h = 320;
	$w = 520;

	$im  =  ImageCreate($w, $h);

	$fill = ImageColorAllocate($im, 251, 121, 34);
	$light = ImageColorAllocate($im, 255, 255, 255);
	$corners = ImageColorAllocate($im, 153, 153, 102);
	$dark = ImageColorAllocate($im, 51, 51 , 0);
	$black = ImageColorAllocate($im , 0, 0 , 0);

	$colors[1] = ImageColorAllocate($im, 255, 255, 255);
	$colors[2] = ImageColorAllocate($im, 255 * 0.95, 255 * 0.95, 255 * 0.95);
	$colors[3] = ImageColorAllocate($im, 255 * 0.9, 255 * 0.9, 255 * 0.9);
	$colors[4] = ImageColorAllocate($im, 255 * 0.85, 255 * 0.85, 255 * 0.85);

	header("Content-Type: image/png");

	srand($_GET['egal']);
	$c = 1;
	$anz = 10;
	$step = (4 / $anz);
	for ($i = 0; $i < $anz; $i += 1) {
		$size = rand(7, 70);
		$x = rand(-390, 390);
		$y = rand(-100, 400);
		$color = $colors[$c];
		$c += $step;
		ImageTTFText($im, $size, 0, $x, $y, $color, $fontfile, $_GET['text']);
	}

	ImageLine($im, 0, 0, $w - 1, 0, $light);
	ImageLine($im, 0, 0, 0, $h - 2, $light);
	ImageLine($im, $w - 1, 0, $w-1, $h, $dark);
	ImageLine($im, 0, $h - 1, $w - 1, $h - 1, $dark);
	ImageSetPixel($im, 0 , $h - 1, $corners);
	ImageSetPixel($im, $w - 1, 0, $corners);

	ImagePNG($im);
	exit;
?>
