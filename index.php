<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8' /> 
	<meta name='description' content='' />
	<meta name='robots' content='noodp, noydir' />
	<meta name='viewport' content='width=device-width, initial-scale=1' />
	<title>TCC Testing Report</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script type="text/javascript">
        var i = 1;
        var folder = '<?php echo $_GET["f1"] ? $_GET["f1"] : ""; ?>';
        var file = (folder == "ios") ? "ios_data.json" : "android_data.json";
        jQuery.getJSON(file).done(function(res) {
            i = res.length;
        });
    </script>
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
                <div class="comments">
                    <form action="../json.php" method="post">
                        <input type="hidden" name="action" value="<?=$_GET['f1'];?>">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Commont</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                $file = ($_GET['f1'] == "ios") ? "ios_data.json" : "android_data.json";
                                $contents = json_decode(file_get_contents($file));
                                if(!count($contents)) {
                            ?>
                                <tr>
                                  <td><input class="mdl-textfield__input" type="text" name="comments[0]['id']"></td>
                                  <td><input class="mdl-textfield__input" type="text" id="status" name="comments[0]['status']"></td>
                                  <td><textarea class="mdl-textfield__input" type="text" rows= "3" name="comments[0]['comment']"></textarea></td>
                                </tr>
                            <?php
                                } else {
                                foreach ($contents as $key => $content) {
                                    $cmt = (array) $content;
                            ?>
                                <tr>
                                  <td><input class="mdl-textfield__input" type="text" name="comments[<?=$key;?>]['id']" value="<?=$cmt["'id'"];?>"></td>
                                  <td><input class="mdl-textfield__input" type="text" id="status" name="comments[<?=$key;?>]['status']" value="<?=$cmt["'status'"];?>"></td>
                                  <td><textarea class="mdl-textfield__input" type="text" rows= "3" name="comments[<?=$key;  ?>]['comment']"><?=$cmt["'comment'"];?></textarea></td>
                                </tr>
                            <?php }
                                }
                            ?>
                        </tbody>
                    </table>
                    <button class="mdl-button mdl-js-button">
                      Save
                    </button>
                    </form>
                    <button class="mdl-button mdl-js-button" onclick="addRow();">
                      Add Row
                    </button>
                </div>
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
    <script type="text/javascript">
        var addRow = function() {
            var html = '<tr>'+
                            '<td><input class="mdl-textfield__input" type="text" name="comments['+i+'][\'id\']"></td>'+
                            '<td><input class="mdl-textfield__input" type="text" id="status" name="comments['+i+'][\'status\']"></td>'+
                            '<td><textarea class="mdl-textfield__input" type="text" rows= "3" name="comments['+i+'][\'comment\']"></textarea></td>'+
                        '</tr>';
            $(".mdl-data-table tbody").append(html);
            i++;
        }
    </script>

</html>
