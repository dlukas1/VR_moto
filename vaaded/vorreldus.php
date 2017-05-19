<?php

	include_once ("vaaded/functions.php");
	global $link;
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
?>