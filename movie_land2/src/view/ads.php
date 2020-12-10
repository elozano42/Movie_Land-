<?php
include(__DIR__ . "./header.php");

foreach ($this->adsList as $ad) {
?>

    <div class="container-fluid">
        <div class="card" style="background: white; border:none;">
            <div class="card-header" style="background: white; border:none;">
                <?= $ad['title'] ?>
            </div>

            <center>
                <div class="card-body">
                    <img class="card-text" src="<?= $ad['url_movie'] ?>" width="30%"></p>
                    <a href="?page=ad&id<?= $ad['id'] ?>" class="btn">En voir plus</a>
                </div>
            </center>

        </div>
    </div>

<?php
}
include(__DIR__ . "./footer.php");
?>