<?php
ob_start();
if(isset($_POST['action'])) {
    if($_POST['action'] == "ios") {
        $file = 'ios_data.json';
    } else {
        $file = 'android_data.json';
    }
    $data = $_POST['comments'];
    $fp = fopen($file, 'w');
    fwrite($fp, json_encode($data));
    fclose($fp);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}