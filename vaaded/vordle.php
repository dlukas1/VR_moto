<div id="gallery">
	<?php foreach($pildid as $id=>$pilt):?>
		
		<a href="<?php echo $pilt['url'];?>"><img src="<?php echo $pilt['src'];?>" alt="<?php echo $pilt['alt'];?>"/> </a>
	<?php endforeach; ?>
</div>