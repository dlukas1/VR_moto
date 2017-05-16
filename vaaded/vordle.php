



<h3>Võrdle motorattatüübid ja vali endale parim!</h3>

<div id="gallery">

<form action="?page=vorreldus" method="POST">
	
	<?php 
	foreach($pildid as $id=>$pilt):?>
		
			<label for="p<?php echo $id;?>">
				<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>" height="100" />
			</label>
			<input type="checkbox" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="check_list[]"/>
	
	<?php endforeach; ?>

	<br><br>
		<input type="submit" name="submit" value="Võrdle!"/>
	<br><br>



	
</form>