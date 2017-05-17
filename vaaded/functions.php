<?php

function SQLconnect(){
global $link; //nam ona ponadobitsja dalee
$user = 'root';
$pass = "";
$db = 'test';
$host = 'localhost';
$link = mysqli_connect($host, $user, $pass, $db) or die ("ei saa yhendada");
mysqli_query ($link, "SET CHARACTER SET UTF8") or die ( $sql. " - " . mysql_error($link));
}

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
	if (isset($_POST['fn']) && $_POST['fn']!="" && isset($_POST['password']) && $_POST['password']!=""){
		$username=htmlspecialchars($_POST['fn']);
		$username=htmlspecialchars($_POST['password']);
		header("Location: http://ya.ru/");
		} 
	else {
		include_once("vaaded/head.html");
		include("vaaded/login_form.html");
		include_once("vaaded/foot.html");
		}
};

function login(){
	if (!empty($_POST['login'])) {
		if (($_POST['login']=='admin') && ($_POST['pass']=='admin'))
		{
			$_SESSION['user']='Boss';
			$_SESSION['roll']='admin';
			$_SESSION["user_id"]=1;
		} 
		/*else {
			$_SESSION["user"]="Treener1";
			$_SESSION["roll"]="kasutaja";
			$_SESSION["user_id"]=2;
		}*/
		header("Location: ?mode=pealeht");
	}
	include_once("vaaded/head.html");
	include_once("vaaded/login.html");
	include_once("vaaded/foot.html");
}

function logout(){
	$_SESSION=array();
	session_destroy();
	unset($_SESSION['user']);
	unset($_SESSION['roll']);
	header("Location: ?");
}

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

function kuva_vorreldus()
	{	$user = "root";
		$pass = "";
		$db = "test";
		$host = "localhost";
		$link = mysqli_connect($host, $user,$pass, $db) or die("ei saanudühendatud - " . mysqli_error());
		include_once("vaaded/head.html");

if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
			// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
		$query = "SELECT mudel, omadused, hind, pilt FROM dlukas_moto  WHERE id = $selected";
		$result = mysqli_query($link, $query) or die("$query - ".mysqli_error($link));
		while ($row = mysqli_fetch_assoc($result)) 
		{//$img = <img src = '$row['pilt']'>;

		//вывод полученного 
	echo '<div style = "max-width: 200px; float: left; padding: 50px;">';
	echo '<img src="' . $row['pilt'] . '"  height = "150px";">'."	<br/> Motoratta tyyb: <strong>{$row['mudel']} </strong><br/> <br/>Omadused: <br/>{$row['omadused']} <br/><br/> Hind : <i> {$row['hind']} </i>. <br/>"; 
	echo '</div>';

				}
			}
	
	}
}}
function alusta_sessioon(){
	// siin ees võiks muuta ka sessiooni kehtivusaega
	session_start();
	}
	
function lopeta_sessioon(){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
 	 setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
}

?>