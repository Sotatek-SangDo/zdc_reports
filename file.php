<?php
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
        echo "<li class='item__file'><a target='__blank' href='$url' class='title-case'>$file</a>";
        $content = file_get_contents($url);
        $doc = new \DOMDocument('1.0', 'UTF-8');
        $internalErrors = libxml_use_internal_errors(true);
        $doc->loadHTML($content);
        libxml_use_internal_errors($internalErrors);
        $tagSpans = $doc->getElementsByTagName("span");
        $j = 0;
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
                    echo "<tr>";
                    echo '<td class="detail"><a target="__blank" href="'.$fl.'/'.$folder . '/' . $file .'?order='.$j.'">'. str_replace("_", "-", substr($span->nodeValue, 9)) . '</a></td>';
                    echo '<td class="detail">'. $span->nodeValue . '</td>';
                    $j++;
                    break;
                case 'test-status right pass':
                case 'category label white-text':
                case 'test-status right fail':
                    if($i%2==1) {
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