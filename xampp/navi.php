<?php
	include "langsettings.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
		<link href="xampp.css" rel="stylesheet" type="text/css">
		<script language="JavaScript" type="text/javascript" src="xampp.js"></script>
		<title></title>
	</head>

	<body class="n">
		<table border="0" cellpadding="0" cellspacing="0">
			<tr valign="top">
				<td align="right" class="navi">
					<img src="img/blank.gif" alt="" width="145" height="15"><br>
					<span class="nh">&nbsp;<?php 
					include ".modell"; 
					?></span><br><span class="navi">[PHP: <?php echo phpversion(); ?>]</span><br>
				</td>
			</tr>
			<tr>
				<td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
			</tr>
			<tr valign="top">
				<td align="right" class="navi">
					<a name="start" id="start" class="nh" target="content" onclick="h(this);" href="start.php"><?php echo $TEXT['navi-welcome']; ?></a><br>
					<a class="n" target="content" onclick="h(this);" href="status.php"><?=$TEXT['navi-status']?></a><br>
					<a class="n" target="new" onclick="h(this);" href="/security/lang.php?<?php echo file_get_contents("lang.tmp"); ?>"><?php echo $TEXT['navi-security']; ?></a><br>
					<a class="n" target="content" onclick="h(this);" href="manuals.php"><?php echo $TEXT['navi-doc']; ?></a><br>
					<a class="n" target="content" onclick="h(this);" href="components.php"><?php echo $TEXT['navi-components']; ?></a><br>
					<a class="n" target="content" onclick="h(this);" href="phpinfo.php">phpinfo()</a><br>&nbsp;<br>
					<span class=nh><?=$TEXT['navi-demos']?></span><br>
				</td>
			</tr>
			<tr>
				<td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
			</tr>
			<tr valign="top">
				<td align="right" class="navi">
					<?php include "navibasics.inc"; ?>
					<?php include "naviperl.inc"; ?>
					<?php include "navipython.inc"; ?>
					<?php include "navijava.inc"; ?>

					<br>&nbsp;<br>
					<span class="nh"><?php echo $TEXT['navi-tools']; ?></span><br>
				</td>
			</tr>
			<tr>
				<td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
			</tr>
			<tr valign="top">
				<td align="right" class="navi">
					<?php include "navitools.inc"; ?>
					<?php include "naviservers.inc"; ?>
					<?php include "naviother.inc"; ?>
				</td>
			</tr>
			<tr>
				<td bgcolor="#fb7922" colspan="1" class="white"></td>
			</tr>
			<tr valign="top">
				<td align="right" class="navi">
					<?php include "naviguest.inc"; ?>
					<br>
					<span class="nh"><?php echo $TEXT['navi-languages']; ?></span><br>
				</td>
			</tr>
			<tr>
				<td height="1" bgcolor="#fb7922" colspan="1" style="background-image:url(img/strichel.gif)" class="white"></td>
			</tr>
			<tr valign="top">
				<td align="right" class="navi">
					<a target="_parent" class="n" href="lang.php?de"><?php echo $TEXT['navi-german']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?en"><?php echo $TEXT['navi-english']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?es"><?php echo $TEXT['navi-spanish']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?fr"><?php echo $TEXT['navi-french']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?it"><?php echo $TEXT['navi-italian']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?nl"><?php echo $TEXT['navi-dutch']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?no"><?php echo $TEXT['navi-norwegian']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?pl"><?php echo $TEXT['navi-polish']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?pt"><?php echo $TEXT['navi-portuguese']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?sl"><?php echo $TEXT['navi-slovenian']; ?></a><br>
					<a target="_parent" class="n" href="lang.php?zh"><?php echo $TEXT['navi-chinese']; ?></a><p>

					<p class="navi">&copy;2002-2006<br>
					<?php if ($lang == "de") { ?>
						<a target="_new" href="http://www.apachefriends.org/index.html"><img border="0" src="img/apachefriends.gif" alt=""></a><p>
					<?php } else { ?>
						<a target="_new" href="http://www.apachefriends.org/index-en.html"><img border="0" src="img/apachefriends.gif" alt=""></a><p>
					<?php }	?>
				</td>
			</tr>
		</table>
	</body>
</html>
