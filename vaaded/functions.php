<?php


global $link; //nam ona ponadobitsja dalee
$user = 'test';//$user = 'test'
$pass = "t3st3r123";//$pass = "t3st3r123";
$db = 'test';
$host = 'localhost';
$link = mysqli_connect($host, $user, $pass, $db) or die ("ei saa yhendada");


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
		
		} 
	else {
		include_once("vaaded/head.html");
		include("vaaded/login_form.html");
		include_once("vaaded/foot.html");
		}
};

function login(){
	//tavakasutaja saab kommenteerida, admin - lisama/kustutama
	if (!empty($_POST['login'])) 
		{
		if (($_POST['login']=='admin') && ($_POST['pass']=='admin'))
		{
			$_SESSION['user']='Boss';
			$_SESSION['roll']='admin';
			$_SESSION["user_id"]=1;
			header("Location: ?mode=pealeht");
		} //для юзера сделать запрос из базы данных с проверкой

		else {
			global $link;
			if (isset($_POST['login']) && isset($_POST['pass']) &&!empty($_POST['login'])&& !empty($_POST['pass'])) {
				$checkuser = htmlspecialchars($_POST['login']);
				$checkpwd = htmlspecialchars($_POST['pass']);//polu4ennij parol
				$check = "SELECT login, email, pass FROM dlukas_users WHERE login='$checkuser'";
				$userinfo = mysqli_query($link, $check) or die("$check - ".mysqli_error($link));
				$checkrow = mysqli_fetch_assoc($userinfo);//$checkrow - massiv s dannimi iz bazi dannih

				
				if (sha1($checkpwd).")"==$checkrow['pass'])

				{
				$_SESSION['user']=$checkuser;
				$_SESSION['roll']='user';
				$_SESSION["user_id"]=2;
				$_SESSION['email']=$checkrow['email'];
				header("Location: ?mode=pealeht");
				}	else {
					echo "Sellist kasutajat ei ole!";
					

				}
			}
		}
			
		//header("Location: ?mode=pealeht");
	}
	include_once("vaaded/head.html");
	include_once("vaaded/login.html");
	include_once("vaaded/foot.html");
}

function komment (){
	include_once("vaaded/head.html");
	include("vaaded/komment.php");
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
function lisa(){

	global $link;

	
	$errors=array();
	if (!empty($_POST)){
		if (empty($_POST["mudel"])) {$errors[]="mudel kohustuslik";}
		if (empty($_POST["kiri"])) {$errors[]="kirjeldus kohustuslik";}
		if (empty($_POST["hind"])) {
			$errors[]="hind kohustuslikud";
		}
		if (empty($_POST["pilt"])) {
			$errors[]="pilt kohustuslik";
		}
		if (empty($errors)){
			//siin sisestada andmed 
			$mudel = mysqli_real_escape_string ($link, $_POST["mudel"]);
			$kiri = mysqli_real_escape_string ($link, $_POST["kiri"]);
			$hind = mysqli_real_escape_string ($link, $_POST["hind"]);
			$pilt = mysqli_real_escape_string ($link, $_POST["pilt"]);
			

			$sql = "INSERT INTO 'dlukas_moto' ( `mudel`, `omadused`, `hind`, `pilt`) VALUES ('$mudel' ,'$kiri', '$hind', '$pilt')";
			$result = mysqli_query ($link, $sql) or die ("Eba6nestus");
			if($result){
				header("Location: ?mode=vordle");
				
			}

		}
	}

	include_once("vaaded/head.html");
	include("vaaded/lisa.html");
	include_once("vaaded/foot.html");
}

function kuva_vorreldus()
	{	global $link;
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
}
}

	
function lopeta_sessioon(){
	$_SESSION = array();
	if (isset($_COOKIE[session_name()])) {
 	 setcookie(session_name(), '', time()-42000, '/');
	}
	session_destroy();
}

?>