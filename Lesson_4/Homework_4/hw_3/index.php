<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Homework-3</title>
    <link rel="stylesheet" href="src/css/style.css">
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
                <div>
                        <img id="myImg" width="25%" src="src/img/<?= $images[$i]?>">
                </div>
                        <hr>
                <?php
                endfor;
            }
            ?>

            <?php
            makeGallery(scandir("src/img"));
            ?>
        </td>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="image">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
    </tr>

    <tr height="10%">
        <td colspan=3"">
            Подвал
        </td>
    </tr>
    <script src="src/js/script.js"></script>
</body>
</html>
