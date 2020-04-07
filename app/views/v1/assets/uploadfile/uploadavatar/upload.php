<?php

if ( $_POST['image'] ) {

    $img = str_replace(' ', '+', $_POST['image']);
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$f = fopen('canvas.png', 'w+');
	fwrite($f, $data);
	fclose($f);
	echo '{"result":"ok"}';
} else {

    echo 'error';

}

?>