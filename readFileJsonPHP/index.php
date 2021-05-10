<?php
$jsonData = file_get_contents('json\data.json');
$arrayData = array(json_decode($jsonData), true);
foreach ($arrayData[0] as $key => $value) {
    var_dump($value->id);
}
