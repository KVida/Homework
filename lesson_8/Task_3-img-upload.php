<?php

    $ext = array("png", "gif", "jpg", "jpeg", "JPG");
    $dir_img = 'download_img/';
    $imgs = $_FILES['userimg'];

    if(!empty($imgs)) {
        $imgCount = count($imgs['name']);
        
        if ($imgCount > 20) {
            echo "error:  Привышен лимит картинок";
            exit;
        } 
           
        for ($i = 0; $i < $imgCount; $i++) {
            $ext_img = pathinfo($imgs['name'][$i],PATHINFO_EXTENSION); 

            $ext_img = mb_strtolower($ext_img);
           
            if (in_array($ext_img, $ext)) {
                $img_id = count(array_filter(glob($dir_img . '*'), 'is_file'));
                $new_name_img = $img_id . translit($imgs['name'][$i]);
                move_uploaded_file($imgs['tmp_name'][$i], $dir_img . $new_name_img);  
            } else {
                echo "error: Загрузите картинку!";
                exit;
            }
        }


    } else {
        echo "error: Где картинка?";
    }
    header("location: filemanager.php");

function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
  }
?>