<?php
require 'config.php'; //Подключаем файл конфигурации
require 'process.php'; //Подключаем файл-обработчик
if(isset($_FILES['fupload'])) {

    if(preg_match('/[.](jpg)|(gif)|(png)$/', //Ставим допустимые форматы изображений для загрузки
        $_FILES['fupload']['name'])) {

        $filename = $_FILES['fupload']['name'];
        $source = $_FILES['fupload']['tmp_name'];
        $target = $path_to_image_directory . $filename;

        move_uploaded_file($source, $target);

        createThumbnail($filename);
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Загрузка изображений:</h1>
<form enctype="multipart/form-data" action="" method="post">
    <input type="file" name="fupload" />
    <input type="submit" value="Загрузить" />
</form>
</body>
</html>
