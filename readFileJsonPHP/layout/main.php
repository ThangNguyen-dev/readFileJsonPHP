<?php
var_dump($_SERVER['PHP_SELF']);
var_dump($_GET['page']);

$activELement = 'active';

$open_html = "<nav aria-label='Xem truoc'>
                <ul class='pagination'>";
$end_html = "   </ul>
            </nav>";
$items_html = "<li class='page-item {$activELement}'>
                    <a class='rounded-circle fix-w-38 fix-h-38 text-center page-link' 
                        href='{$_SERVER['PHP_SELF']}?page={$_GET['page']}' 
                        >1
                    </a>
                </li>";
echo $open_html . $items_html . $end_html;
