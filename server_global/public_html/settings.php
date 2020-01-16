<?php
require("global/config.php");
require("global/functions.php");
require("global/engine.class.php");
require("global/users.class.php");

$engine = new Engine();
$user = new Users();



if (!isset($user->id) || $user->id == 0) {
    header("Location: ".$engine->domain);
} else {
    /* Upload Avatar */

    if (isset($_POST['change-avatar']) && $_POST['change-avatar']) {
        $target_dir = "upload/avatar/";
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
		$plik_tmp = $_FILES['avatar']['tmp_name']; 
		$plik_nazwa = $_FILES['avatar']['name']; 
		$plik_rozmiar = $_FILES['avatar']['size']; 
		
	
		if ((($_FILES["avatar"]["type"] == "image/jpeg")
		  || ($_FILES["avatar"]["type"] == "image/jpg")
		  || ($_FILES["avatar"]["type"] == "image/pjpeg")
		  || ($_FILES["avatar"]["type"] == "image/x-png")
		  || ($_FILES["avatar"]["type"] == "image/gif")
		  || ($_FILES["avatar"]["type"] == "image/png")
		  || ($_FILES["avatar"]["type"] == ""))
		&& in_array($extension, $allowedExts))
		{
			if(is_uploaded_file($plik_tmp)) { 
				$id=$user->id;
				$avatarWidth = 120;
				
				/* ---=== Zmieniamy rozmiar ===--- */
				$maxDim = 120;
				list($width, $height, $type, $attr) = getimagesize( $_FILES['avatar']['tmp_name'] );
				if ( $width > $maxDim || $height > $maxDim ) {
					$target_filename = $_FILES['avatar']['tmp_name'];
					$fn = $_FILES['avatar']['tmp_name'];
					$size = getimagesize( $fn );
					$ratio = $size[0]/$size[1]; // width/height
					if( $ratio > 1) {
						$width = $maxDim;
						$height = $maxDim/$ratio;
					} else {
						$width = $maxDim*$ratio;
						$height = $maxDim;
					}
					$src = imagecreatefromstring( file_get_contents( $fn ) );
					$dst = imagecreatetruecolor( $width, $height );
					imagecopyresampled( $dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1] );
					imagedestroy( $src );
					imagepng( $dst, $target_filename ); // adjust format as needed
					imagedestroy( $dst );
				}
				/* ---=== Koniec ===--- */
				
				move_uploaded_file($plik_tmp, "upload/avatar/$user->id.$extension"); 
				
				if ($user->setUserAvatar($engine->domain."/upload/avatar/$user->id.$extension", $user->id)) {
					$engine->error("success", "Awatar został pomyślnie zmieniony.");
					header("Location: ".$engine->domain."/settings");
				} else {
					$engine->error("danger", "Wystąpił błąd podczas dodawania avatara.");
					header("Location: ".$engine->domain."/settings");
				}
			} else {
                $engine->error("danger", "Plik jest większy niż maksymalny rozmiar ustawiony przez serwer.");
				header("Location: ".$engine->domain."/settings");
			} 
		} else {
			$engine->error("danger", "Nieprawidłowy format pliku.");
			header("Location: ".$engine->domain."/settings");
        }
    }



}

?>