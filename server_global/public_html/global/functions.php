<?php

/* Function for Checking Input */
function checkInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);    
    return $data;
}



/* Function Resizing Image */
function resize($newWidth, $targetFile, $originalFile) {
    $info = getimagesize($originalFile);
	
    $mime = $info['mime'];

    switch ($mime) {
            case 'image/jpeg':
                    $image_create_func = 'imagecreatefromjpeg';
                    $image_save_func = 'imagejpeg';
                    $new_image_ext = 'jpg';
                    break;

            case 'image/png':
                    $image_create_func = 'imagecreatefrompng';
                    $image_save_func = 'imagepng';
                    $new_image_ext = 'png';
                    break;

            case 'image/gif':
                    $image_create_func = 'imagecreatefromgif';
                    $image_save_func = 'imagegif';
                    $new_image_ext = 'gif';
                    break;

            default: 
                    throw Exception('Unknown image type.');
    }

    $img = $image_create_func($originalFile);
    list($width, $height) = getimagesize($originalFile);

    $newHeight = ($height / $width) * $newWidth;
    $tmp = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    if (file_exists($targetFile)) {
            unlink($targetFile);
    }
    $image_save_func($tmp, "../upload/avatar/$targetFile.$new_image_ext");
	return true;
}

function randomImage($world) {
        require 'files/simple_html_dom.php';
        $url = "https://unsplash.com/s/photos/".$world;
    
        $html = file_get_html($url);
    
        // Find all images
        $x = 0;
        foreach($html->find('a') as $element){
            if ($element->class == "_2Mc8_") {  
                $x++;
                $photoUrl[$x] = $element->href;
            }
        }
    
        $openPhoto = $photoUrl[rand(1, $x)];
        $z = 0;
        $htmlDuo = file_get_html("https://unsplash.com".$openPhoto);
        foreach($htmlDuo->find('img') as $element){
            $z++;
            $photo[$z] = $element->src;
        }
        // zupełnie losowe zdjęcia
        return $photo[4];
    }

?>