<?php
$dir = "./data/";
$mappngs = array();

$maps = glob($dir . "*.json");
foreach($maps as $map) {
    $json = json_decode(file_get_contents($map));
    isset($mappings[$json['x']][$json['y']]) ? $mappings[$json['x']][$json['y']] = 1 : $mappings[$json['x']][$json['y']]++;
}
var_dump($mappings);