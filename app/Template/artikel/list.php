<div class="container">
<?php
if ($data!=false){
    ?><div class="row">
        <?php foreach ($data as $artikel) {
            ?>
            <div class="col-md-4">
                <h3><?= $artikel['judul'] ?></h3>
                <p><?= $artikel['isi'] ?></p>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    echo $pagination;
}
?>
</div>