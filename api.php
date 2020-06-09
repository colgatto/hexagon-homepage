<?php

header('Content-Type: application/json');

if(!isset($_POST['action'])) die('');

switch($_POST['action']){
	case 'set':
		if(isset($_POST['data']))
			file_put_contents(__DIR__ . '/menu.json', $_POST['data']);
		echo '"done"';
		break;
}
?>