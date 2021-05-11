<?php
var_dump($_SERVER['PHP_SELF']);
var_dump($_GET['page']);

$activELement = 'active';
$open_html = "<nav aria-label='...'>
                <ul class='pagination'>";
$end_html = "</ul>
                </nav>";
$items_html = "<li class='page-item {$activELement}'>
                    <a class='page-link' 
                        href='{$_SERVER['PHP_SELF']}?page={$_GET['page']}' 
                        >Previous
                    </a>
                </li>";
echo $open_html . $items_html . $end_html;
