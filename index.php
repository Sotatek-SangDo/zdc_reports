<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' /> 
	<meta name='description' content='' />
	<meta name='robots' content='noodp, noydir' />
	<meta name='viewport' content='width=device-width, initial-scale=1' />
	<title>TCC Testing Report</title>
</head>

<body>
	<h1 style='font-size:56px'>Reports ZDC Auto</h1>
	<div>
	<h4>File report .html</h4>
		<ul>
			<?php 
				$dir    = '/home/sang/reports';
				$files = scandir($dir);
				foreach ($files as $file) {
					$extension = pathinfo($file, PATHINFO_EXTENSION);
					if ($extension == 'html') {
						echo "<li><a href='/$file'>$file</a> </li>";
					}
				}
			?>
		</ul>
	<div>
<body>

</html>
