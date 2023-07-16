<div class="news">
    <h1 class="news__header">Новости</h1>
<?php
if (isset($news)) {
    foreach ($news as $info) {
        ?>
        <div class="news__contant">
            <div class="news__top">
                <h2 class="news__head"><?= $info[1] ?></h2>
                <h3 class="news__date"><?= $info[3] ?></h3>
            </div>
            <p class="news__text"><?= $info[2] ?></p>
        </div>
        <?php
    }
}
else {
    ?>
    Новостей нет
<?php
}
?>
</div>
