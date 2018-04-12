<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' /> 
	<meta name='description' content='' />
	<meta name='robots' content='noodp, noydir' />
	<meta name='viewport' content='width=device-width, initial-scale=1' />
	<title>TCC Testing Report</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h1 style='font-size:56px'>Reports ZDC Auto</h1>
	<div>
	<h4>File report .html</h4>
		<?php if(!isset($_GET["f"])) { ?>
			<ul class="list__folder">
				<?php 
					$dirs = glob('*', GLOB_ONLYDIR);
					foreach($dirs as $file) {
						if(is_dir($file) && $file!= "images") {
							echo "<li class='item__folder'>";
								echo "<img src='images/icon/folder.png' height='30' width='30'/>";
									echo "<a href='?f=$file'>" . $file . "</a>";
							echo "</li>";
					 	}
					}
				?>
			</ul>
		<?php } else { 
			echo $_GET["f"];
		}?>
	<div>
<body>

</html>
