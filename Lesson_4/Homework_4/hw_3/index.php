<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Homework-3</title>
    <link rel="stylesheet" href="src/css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<div class="row">
            <?php

            function makeGallery($images) {
                $counter = 0;
                for($i=2;$i<count($images);$i++):
                $counter = ++ $counter;?>
                    <div class="column">
                        <img width="50%" class="hover-shadow" src="src/img/<?= $images[$i]?>" onclick="openModal();currentSlide(<?=$counter ?>)">
                    </div>
                <?php
                endfor;
            }
            ?>

            <?php
            makeGallery(scandir("src/img"));
            ?>
</div>

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

        <?php

        function makeMySlides($images) {
            $counter = 0;
            $dir = opendir('src/img');
            $count_file = 0;
            while($file = readdir($dir)){
                if($file == '.' || $file == '..' || is_dir('src/img' . $file)){
                    continue;
                }
                $count_file++;
            }
            for($i=2;$i<count($images);$i++):
                $counter = ++ $counter;?>
                <div class="mySlides">
                    <div class="numbertext"> <?= $counter?> / <?=$count_file ?></div>
                    <img width="100%" src="src/img/<?= $images[$i]?>">
                </div>
            <?php
            endfor;
        }
        ?>

        <?php
        makeMySlides(scandir("src/img"));
        ?>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <div class="scrolling">
        <!-- Thumbnail image controls -->
                <?php

                function makeThumbnailsControls($images) {
                    $counter = 0;
                    for($i=2;$i<count($images);$i++):
                        $counter = ++ $counter;?>
                        <div class="column">
                            <img class="demo" onclick="currentSlide(<?= $counter?>)" src="src/img/<?= $images[$i]?>" alt= "text">
                        </div>
                    <?php
                    endfor;
                }
                ?>

                <?php
                makeThumbnailsControls(scandir("src/img"));
                ?>
        </div>


    </div>
</div>

    <script src="src/js/script.js"></script>
</body>
</html>
