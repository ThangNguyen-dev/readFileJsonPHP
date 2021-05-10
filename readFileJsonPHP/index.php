<?php
$jsonData = file_get_contents('json\data.json');
var_dump(json_decode($jsonData),true);
