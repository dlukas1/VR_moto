<?php
//session_start();
require_once("vaaded/functions.php");
//require_once("vaaded/head.html");

$pildid = array(
		1=>array('src'=>"motothumb/cross.jpg", 		'alt'=>"cross", 'url'=>'motot/cross.html'),
		2=>array('src'=>"motothumb/cruiser.jpg", 	'alt'=>"cruiser", 'url'=>'motot/cruiser.html'),
		3=>array('src'=>"motothumb/enduro.jpg", 	'alt'=>"enduro", 'url'=>'motot/enduro.html'),
		4=>array('src'=>"motothumb/naked.jpg", 		'alt'=>"naked", 'url'=>'motot/naked.html'),
		5=>array('src'=>"motothumb/sport.jpg", 		'alt'=>"sport", 'url'=>'motot/sport.html'),
		6=>array('src'=>"motothumb/touring.jpg", 	'alt'=>"touring", 'url'=>'motot/touring.html'),
	);

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}
switch($page){

	case "galerii":
		kuva_galerii();
		//include("vaaded/galerii.html");
			break;
	case "vordle":
		
		kuva_vordle();
		//include("vaaded/vordle.php");
			break;
	case 'login':
		kuva_login();
		//include("vaaded/login_form.html");
			break;
	case 'register':
		kuva_reg_form();
		//include ("vaaded/reg_form.html");
			break;
	case "cross":
		kuva_cross();
		//include("motot/cross.html");
			break;
	case "cruiser":
		kuva_cruiser();
		//include("motot/cruiser.html");
			break;
	case "enduro":
		kuva_enduro();
		//include("motot/enduro.html");
			break;
	case "naked":
		kuva_naked();
		//include("motot/naked.html");
			break;
	case "sport":
		kuva_sport();
		//include("motot/sport.html");
			break;
	case "touring":
		kuva_touring();
		//include("motot/touring.html");
			break;
	case "vorreldus":
		$id=false;
		if (isset($_POST['pilt']) && isset($pildid[$_POST['pilt']]))
		$id=htmlspecialchars($_POST['pilt']);
		include("vaaded/vorreldus.html");
			break;
	default:
	kuva_pealeht();
	//include('vaaded/pealeht.html');
}

	//require_once("vaaded/foot.html");
?>