<h3>Võrdle motorattatüübid ja vali endale parim!</h3>
<div id="gallery">

<form action="?page=vorreldus" method="POST">
	<?php 
	foreach($pildid as $id=>$pilt):?>
		
			<label for="p<?php echo $id;?>">
				<img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>" height="100" />
			</label>
			<input type="checkbox" value="<?php echo $id;?>" id="p<?php echo $id;?>" name="pilt"/>
	
	<?php endforeach; ?>

	<br>
		<input type="submit" value="Võrdle!"/>
	<br>
	
</form>