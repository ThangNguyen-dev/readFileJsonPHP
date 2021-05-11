<?php

$jsonData = file_get_contents(__DIR__ . '\..\json\data.json');

$arrayData = array(json_decode($jsonData), true);
foreach ($arrayData[0] as $key => $value) {
    // var_dump($value->id);
    echo 'Name: ' . $value->name . '<br/>';
    echo 'Gender: ' . $value->gender . '<br/>';
    echo 'Age: ' . $value->age . '<br/>';
    echo 'Company: ' . $value->company . '<br/>';
    echo 'Email: ' . $value->email . '<br/>';
    echo 'Phone: ' . $value->phone . '<br/>';
    echo 'Address: ' . $value->address . '<br/>';
    echo '<hr/>';
    if ($key == 5) {
        exit;
    }
}

// var_dump($_SERVER['PHP_SELF']);
// var_dump($_GET['page']);

$activELement = 'active';

$open_html = "<nav aria-label='Xem truoc'>
                <ul class='pagination'>";
$end_html = "   </ul>
            </nav>";
$items_html = "<li class='page-item {$activELement}'>
                    <a class='rounded-circle fix-w-38 fix-h-38 text-center page-link' 
                        href='{$_SERVER['PHP_SELF']}?page={}' 
                        >1
                    </a>
                </li>";
echo $open_html . $items_html . $end_html;
