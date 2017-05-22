<!--
<div style="border: 1px solid black">
	<img src="../motopics/sport.jpg" height="200px" align="left" border="1px solid black"><h1>Sportsbike</h1>
<br>
</div>
<img src="../motopics/enduro.jpg" height="200px" align="left"><h1>Touring bike</h1>-->
<form method="post">
<?php
$a=0;
while ( $a<= 10) :?>
<input type="checkbox" name="index" value="<?php echo $a?>";>
<?php $a++;

?>


<!--echo '<input type="checkbox" name="index" value = "<?php echo $a ?>"><br> ';echo $a;
	//$a++;-->



	<input type="submit" name="submit">Sub
</form>
<!--<?php
if (isset($_POST['submit'])) {
	print_r($_POST['index']) ;
}
?>-->