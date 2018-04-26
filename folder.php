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