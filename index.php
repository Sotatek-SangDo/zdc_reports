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
		<?php if(!isset($_GET["f"])) { ?>
			<h3>Folder</h3>
			<hr style="width: 100%; height: 1px; color: #333" />
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
			$folder = $_GET["f"];
			echo '<h3 class="folder__title"> Folder : <b>' . $folder . '</b></h3>';
			$dir = getcwd() . '/' . $_GET["f"];
			$files = scandir($dir);
				echo '<ul class="list__file">';
				foreach ($files as $file) {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    if ($extension == 'php') {
                        echo "<li class='item__file'><a target='__blank' href='$folder/$file'>$file</a>";
                        $url = $folder . '/' . $file;
                        $content = file_get_contents($url);
                        $doc = new \DOMDocument('1.0', 'UTF-8');
                        $internalErrors = libxml_use_internal_errors(true);
                        $doc->loadHTML($content);
                        libxml_use_internal_errors($internalErrors);
            			$tagSpans = $doc->getElementsByTagName("span");
            			$i = 0;
            			echo '<table class="testcase">';
            			echo "<tr class='first'>";
            			echo "<th>ID</th>";
            			echo "<th>Testcase</th>";
            			echo "<th>Status</th>";
            			echo "<th>Device</th>";
            			echo "</tr>";
            			foreach ($tagSpans as $key => $span) {
            				$class = $span->getAttribute("class");
            				switch ($class) {
            					case 'test-name':
            					case 'test__id':
            					case 'test-status right pass':
            					case 'category label white-text':
            						$j = 0;
	            					if($i%4==0) {
	            						echo "<tr>";
	            						echo '<td class="detail"><a href="'.$folder . '/' . $file .'?order='.$j.'">'. $span->nodeValue . '</a></td>';
	            					} else if($i%3==3) {
	            						echo '<td class="detail">'. $span->nodeValue . '</td>';
	            						echo '</tr>';
	            					} else {
            							echo '<td class="detail">'. $span->nodeValue . '</td>';
            						}
            						$i++;
            						break;
            					default:
            						break;
            				}
						}
						echo '</table></li>';
                    }
                }
                echo '</ul>';
		}?>
	<div>
<body>

</html>
