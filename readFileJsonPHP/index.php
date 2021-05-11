<?php


$jsonData = file_get_contents('json\data.json');
$arrayData = array(json_decode($jsonData), true);
foreach ($arrayData[0] as $key => $value) {
    var_dump($value->id);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'layout/header.php' ?>
</head>

<body>
    <?php require_once 'layout/main.php'; ?>

    <?php require_once 'layout/footer.php' ?>
</body>

</html>