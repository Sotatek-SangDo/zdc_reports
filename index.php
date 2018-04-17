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
		<?php if(isset($_GET["f2"]) && isset($_GET["f2"])) { 
            $folder = $_GET["f2"];
            $fl = $_GET["f1"];
            echo '<h3 class="folder__title"> Folder : <b><a href="/">Report</a>/<a href="?f1='.$fl.'">' .$fl. '</a>/'. $folder . '</b></h3>';
            $dir = getcwd() . '/'.$fl.'/' . $folder;
            $files = scandir($dir);
                echo '<ul class="list__file">';
                foreach ($files as $file) {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    if ($extension == 'php') {
                        $url =  $fl . '/' . $folder . '/' . $file;
                        echo "<li class='item__file'><a target='__blank' href='$url'>$file</a>";
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
                        $j = 0;
                        foreach ($tagSpans as $key => $span) {
                            $class = $span->getAttribute("class");
                            switch ($class) {
                                case 'test-name':
                                case 'test__id':
                                case 'test-status right pass':
                                case 'category label white-text':
                                case 'test-status right fail':
                                    if($i%4==0) {
                                        echo "<tr>";
                                        echo '<td class="detail"><a target="__blank" href="'.$fl.'/'.$folder . '/' . $file .'?order='.$j.'">'. $span->nodeValue . '</a></td>';
                                        $j++;
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
            } else if(isset($_GET["f1"])) { ?>
                <h3 class="folder__title">Folder : <b><a href="/">Report</a>/<?php echo $_GET['f1'];?></b></h3>
                <ul class="list__folder">
                    <?php 
                        $dirs = glob(''.$_GET["f1"].'/*', GLOB_ONLYDIR);
                        foreach($dirs as $file) {
                            if(is_dir($file) && $file!= "images") {
                                $file = str_replace($_GET['f1'] . '/', '', $file);
                                echo "<li class='item__folder'>";
                                    echo "<img src='images/icon/folder.png' height='30' width='30'/>";
                                        echo "<a href='?f1=" .$_GET['f1']. "&f2=".$file."'>" . $file . "</a>";
                                echo "</li>";
                            }
                        }
                    ?>
                </ul>
		<?php } else { ?> 
			<h3>Folder</h3>
            <ul class="list__folder">
                <?php 
                    $dirs = glob('*', GLOB_ONLYDIR);
                    foreach($dirs as $file) {
                        if(is_dir($file) && $file!= "images") {
                            echo "<li class='item__folder'>";
                                echo "<img src='images/icon/folder.png' height='30' width='30'/>";
                                    echo "<a href='?f1=$file'>" . $file . "</a>";
                            echo "</li>";
                        }
                    }
                ?>
            </ul>
		<?php }?>
	<div>
<body>

</html>
