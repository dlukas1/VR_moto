



<h3>Võrdle motorattatüübid ja vali endale parim!</h3>

<div id="gallery">

<form action="?page=vorreldus" method="POST">
	<input type="checkbox" name="id" value="sport">SPORTBIKE
	<input type="checkbox" name="id" value="enduro">ENDURO
	</form>
	

	<?php 
	/*
	include_once ("functions.php");
	global $link;
	$ask =  "SELECT mudel, omadused, hind, pilt FROM dlukas_moto";
	$asklist = mysqli_query($link, $ask) or die("$ask - ".mysqli_error($link));
	while ($row = mysqli_fetch_assoc($asklist)){
		echo '<div style = "max-width: 200px;  padding: 10px;">';
		echo '<img src="' .$row['pilt']. '"  height = "150px";">'."	 Motorattas: <strong>{$row['mudel']} </strong>Omadused: {$row['omadused']}  Hind : <i> {$row['hind']} </i>. <br/>"; 
		echo '<input type="checkbox" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="mudel"/>';
	echo '</div>';
	
	}
	
/* Старый вариант, без базы данных, только то что забито
	foreach($pildid as $id=>$pilt):?>
		
			<label for="p<?php echo $id;?>">
				<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>" height="100" />
			</label>
			<input type="checkbox" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="check_list[]"/>
	
	<?php endforeach;*/ ?>

	<br><br>
		<input type="submit" name="submit" value="Võrdle!"/>
	<br><br>



	
</form>