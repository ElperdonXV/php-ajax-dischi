<?php
include __DIR__ . '/../server/db.php';
?>
<div class="container p-5">
    <div class="row row-col-5 cards g-3">
        <?php foreach ($cards as $card) { ?>
            <div class="col-2 m-3 p-3 text-center border-0 card">
                <img src="<?= $card['poster'] ?>" class="mb-3" alt="">
                <h2><?= $card['title'] ?></h2>
                <h3><?= $card['author'] ?></h3>
                <h4><?= $card['year'] ?></h4>
            </div>
        <?php } ?>    
    </div>
</div>
