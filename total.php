<?php
$dir = './data/';
is_dir($dir) ?: mkdir($dir);
$fp = fopen($dir . time() . '_' . uniqid() . '.json', "w");
fwrite($fp, json_encode($_GET));
fclose($fp);