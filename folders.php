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