<?php
session_start();
require_once("vaaded/head.html");

$pildid = array(
		1=>array('src'=>"motothumb/cross.jpg", 'alt'=>"cross", 'url'=>'motot/cross.html'),
		2=>array('src'=>"motothumb/cruiser.jpg", 'alt'=>"cruiser", 'url'=>'motot/cruiser.html'),
		3=>array('src'=>"motothumb/enduro.jpg", 'alt'=>"enduro", 'url'=>'motot/enduro.html'),
		4=>array('src'=>"motothumb/naked.jpg", 'alt'=>"naked", 'url'=>'motot/naked.html'),
		5=>array('src'=>"motothumb/sport.jpg", 'alt'=>"sport", 'url'=>'motot/sport.html'),
		6=>array('src'=>"motothumb/touring.jpg", 'alt'=>"touring", 'url'=>'motot/touring.html'),
	);

$page="pealeht";
if (isset($_GET['page']) && $_GET['page']!=""){
	$page=htmlspecialchars($_GET['page']);
}
switch($page){
	case "galerii":
		include("vaaded/galerii.html");
	break;
	case "vordle":
		include("vaaded/vote.html");
	break;

	case "cross":
		include("motot/cross.html");
		break;
	case "cruiser":
		include("motot/cruiser.html");
		break;
	case "enduro":
		include("motot/enduro.html");
		break;
	case "naked":
		include("motot/naked.html");
		break;
	case "sport":
		include("motot/sport.html");
		break;
	case "touring":
		include("motot/touring.html");
		break;
	default:
	include('vaaded/pealeht.html');
}




	require_once("vaaded/foot.html");
?>
