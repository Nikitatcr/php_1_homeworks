<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Homework-3</title>
</head>
<body>
<table border="1" width = "100%" height = "100%">
    <tr height="10%">
        <td colspan="3">
            Галерея
        </td>
    </tr>

    <tr>
        <td>
            <?php

            function makeGallery($images) {
                for($i=2;$i<count($images);$i++):?>
                    <a href="src/img/<?= $images[$i]?>" target="_blank">
                        <img width="100%" align="middle" src="src/img/<?= $images[$i]?>">
                    </a>
                    <hr>
                <?php
                endfor;
            }
            ?>

            <?php
            makeGallery(scandir("src/img"));
            ?>
        </td>
    </tr>

    <tr height="10%">
        <td colspan=3"">
            Подвал
        </td>
    </tr>
</body>
</html>
