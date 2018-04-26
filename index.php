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
    <script type="text/javascript" src="app.js"></script>
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
                include("file.php");
            } else if(isset($_GET["f1"])) { 
                include("folder.php");
            } else { 
            include("folders.php");
        }?>
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
