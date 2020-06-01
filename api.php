<?php

header('Content-Type: application/json');

if(!isset($_POST['action'])) die('');

switch($_POST['action']){
	case 'get':
		$json_menu = file_get_contents(__DIR__ . '/menu.json');
		echo $json_menu;
		break;
	case 'set':
		if(isset($_POST['data']))
			file_put_contents(__DIR__ . '/menu.json', $_POST['data']);
		echo '"done"';
		break;
}
?>