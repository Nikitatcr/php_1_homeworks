<?php
require_once('scalefunction.php');
$path = "img/".$_FILES['photo']['name'];
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    echo "Файл загружен!";
} else {
    echo "Ошибка при загрузке файла!";
}

resize($minImg, 100);

?>
