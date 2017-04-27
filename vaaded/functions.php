<?php
function kuva_galerii (){
	include_once("vaaded/head.html");
	include("vaaded/galerii.html");
	include_once("vaaded/foot.html");
};
function kuva_vordle(){
	global $pildid;
	include_once("vaaded/head.html");
	include("vaaded/vordle.php");
	include_once("vaaded/foot.html");
};
function kuva_login(){
	include_once("vaaded/head.html");
	include("vaaded/login_form.html");
	include_once("vaaded/foot.html");
};
function kuva_pealeht(){
	include_once("vaaded/head.html");
	include("vaaded/pealeht.html");
	include_once("vaaded/foot.html");
};
function kuva_register (){
	include_once("vaaded/head.html");
	include("vaaded/reg_form.html");
	include_once("vaaded/foot.html");
};
function kuva_cross(){
	include_once("vaaded/head.html");
	include("motot/cross.html");
	include_once("vaaded/foot.html");
};
function kuva_cruiser(){
	include_once("vaaded/head.html");
	include("motot/cruiser.html");
	include_once("vaaded/foot.html");
};
function kuva_enduro(){
	include_once("vaaded/head.html");
	include("motot/enduro.html");
	include_once("vaaded/foot.html");
};
function kuva_naked(){
	include_once("vaaded/head.html");
	include("motot/naked.html");
	include_once("vaaded/foot.html");
};
function kuva_sport(){
	include_once("vaaded/head.html");
	include("motot/sport.html");
	include_once("vaaded/foot.html");
};
function kuva_touring(){
	include_once("vaaded/head.html");
	include("motot/touring.html");
	include_once("vaaded/foot.html");
};




?>