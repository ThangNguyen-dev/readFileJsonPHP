<?php

$jsonData = file_get_contents(__DIR__ . '\..\json\data.json');

$arrayData = array(json_decode($jsonData), true);

/**
 *  get number page from url 
 * if not isset is page = 1
 * */
if (isset($_GET['page']) && (int)$_GET['page']) {
    $curentPage = $_GET['page'];
} else {
    $curentPage = 1;
}
$activePage = 'active';
$endPage = ($curentPage - 1) * 5  + 5;
$startPage = ($curentPage - 1) * 5;
?>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Company</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($startPage; $startPage <= $endPage; $startPage++) : ?>
            <?php if (!isset($arrayData[0][$startPage])) {
                exit;
            } ?>
            <tr>
                <th scope="row"><?= $startPage ?></th>
                <td><?= $arrayData[0][$startPage]->name ?></td>
                <td><?= $arrayData[0][$startPage]->gender ?></td>
                <td><?= $arrayData[0][$startPage]->company ?></td>
                <td><?= $arrayData[0][$startPage]->email ?></td>
                <td><?= $arrayData[0][$startPage]->phone ?></td>
                <td><?= $arrayData[0][$startPage]->address ?></td>
            </tr>

        <?php endfor; ?>

    </tbody>
</table>

<nav aria-label='Xem truoc'>
    <ul class='pagination'>
        <li class='page-item <?= $activePage ?>'>
            <a class='rounded-circle fix-38 align-middle text-center page-link' href='<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage + 1 ?>'>
                <?= $curentPage + 1 ?>
            </a>
        </li>
    </ul>
</nav>