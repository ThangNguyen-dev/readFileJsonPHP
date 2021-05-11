<?php

$jsonData = file_get_contents(__DIR__ . '\..\json\data.json');

$arrayData = array(json_decode($jsonData), true);

/**
 *  get number page from url 
 * if not isset is currentPage = 1 to set current page
 * */
if (isset($_GET['page']) && (int)$_GET['page']) {
    $curentPage = $_GET['page'];
} else {
    $curentPage = 1;
}
$activePage = 'active';
$endPage = ($curentPage - 1) * 5  + 5;
$startPage = ($curentPage - 1) * 5 + 1;
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
            <?php if (isset($arrayData[0][$startPage])) : ?>
                <tr>
                    <th scope="row"><?= $startPage ?></th>
                    <td><?= $arrayData[0][$startPage]->name ?></td>
                    <td><?= $arrayData[0][$startPage]->gender ?></td>
                    <td><?= $arrayData[0][$startPage]->company ?></td>
                    <td><?= $arrayData[0][$startPage]->email ?></td>
                    <td><?= $arrayData[0][$startPage]->phone ?></td>
                    <td><?= $arrayData[0][$startPage]->address ?></td>
                </tr>
            <?php endif; ?>
        <?php endfor; ?>
    </tbody>
</table>
<nav aria-label='Xem truoc' class="center">
    <ul class='pagination'>
        <li class="page-item">
            <?php if ($curentPage > 1) : ?>
                <a class="page-link bg-light fix-50 m-1 center .bg-info" href="<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage - 4 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            <?php elseif ($curentPage > 1 && $curentPage < 4) : ?>
                <a class="page-link bg-light fix-50 m-1 center .bg-info" href="<?= $_SERVER['PHP_SELF'] . '?page=1' ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            <?php else : ?>
                <a class="page-link bg-light fix-50 m-1 center bg-info disabled" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            <?php endif; ?>
        </li>
        <li class='page-item'>
            <a class='rounded-circle center m-1 fix-50 page-link' href='<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage - 2 ?>'>
                <?= $curentPage - 2 ?>
            </a>
        </li>
        <li class='page-item'>
            <a class='rounded-circle center m-1 fix-50 page-link' href='<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage - 1 ?>'>
                <?= $curentPage - 1 ?>
            </a>
        </li>
        <li class='page-item <?= $activePage ?>'>
            <a class='rounded-circle disabled center m-1 fix-50 page-link' href='<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage  ?>'>
                <?= $curentPage  ?>
            </a>
        </li>
        <li class='page-item'>
            <a class='rounded-circle center m-1 fix-50 page-link' href='<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage + 1 ?>'>
                <?= $curentPage + 1 ?>
            </a>
        </li>
        <li class='page-item'>
            <a class='rounded-circle center m-1 fix-50 page-link' href='<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage + 2 ?>'>
                <?= $curentPage + 2 ?>
            </a>
        </li>
        <?php if ($curentPage > count($arrayData) + 4) : ?>
            <a class="page-link bg-light fix-50 m-1 center .bg-info" href="<?= $_SERVER['PHP_SELF'] . '?page=' . $curentPage + 4 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        <?php elseif ($curentPage > count($arrayData) + 4 && $curentPage > count($arrayData) + 1) : ?>
            <a class="page-link bg-light fix-50 m-1 center .bg-info" href="<?= $_SERVER['PHP_SELF'] . '?page=' . count($arrayData) ?>' ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        <?php else : ?>
            <a class="page-link bg-light fix-50 m-1 center bg-info disabled" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        <?php endif; ?>
    </ul>
</nav>