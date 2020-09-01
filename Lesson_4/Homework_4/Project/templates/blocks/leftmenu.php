<?php

function makeGallery($images) {
        for($i=2;$i<count($images);$i++):?>
        <a href="../public/img/<?= $images[$i]?>" target="_blank">
            <img width="100%" align="middle" src="../public/img/<?= $images[$i]?>">
        </a>
        <hr>
    <?php
    endfor;
    }
    ?>

<?php
makeGallery(scandir("../public/img"));
?>
