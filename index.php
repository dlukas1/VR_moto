
<?php

require_once("vaaded/functions.php");
session_start(); 

$pildid = array(
		1=>array('src'=>"motothumb/cross.jpg", 		'alt'=>"cross", 	'url'=>'motot/cross.html'),
		2=>array('src'=>"motothumb/cruiser.jpg", 	'alt'=>"cruiser", 	'url'=>'motot/cruiser.html'),
		3=>array('src'=>"motothumb/enduro.jpg", 	'alt'=>"enduro", 	'url'=>'motot/enduro.html'),
		4=>array('src'=>"motothumb/naked.jpg", 		'alt'=>"naked", 	'url'=>'motot/naked.html'),
		5=>array('src'=>"motothumb/sport.jpg", 		'alt'=>"sport", 	'url'=>'motot/sport.html'),
		6=>array('src'=>"motothumb/touring.jpg", 	'alt'=>"touring", 	'url'=>'motot/touring.html'),
	);

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}
switch($page){
	case "galerii":
		kuva_galerii();
			break;
	case "vordle":
		kuva_vordle();
			break;
	case  "login":
		login();
		break;
	case "komment";
		komment();
		break;
	case "logout":
		logout();
	break;	
	case 'register':
		kuva_register();
			break;
	case "cross":
		kuva_cross();
			break;
	case "cruiser":
		kuva_cruiser();
			break;
	case "enduro":
		kuva_enduro();
			break;
	case "naked":
		kuva_naked();
			break;
	case "sport":
		kuva_sport();
			break;
	case "touring":
		kuva_touring();
			break;
	case "vorreldus":
		kuva_vorreldus();
			break;
	case 'lisa':
		lisa();
		break;


	default:
	kuva_pealeht();
}
?>