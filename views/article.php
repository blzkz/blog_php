<h2><?php echo $ent['title']; ?></h2>
<p><?php echo $ent['content']; ?></p>
<div class="linea-1"></div>
<h3>Comentarios:</h3>
<?php
$i = 1;
foreach ($com as $comment) {
	echo "<p><h4>".$i.". ".$comment['nick']."</h4></p>";
	echo "<p>".$comment['comment']."</p>";
	$i++;
}
?>
<p>¿Tienes opinión? ¡Pues ya sabes!</p>
<form action="<?php echo base_url(); ?>blog/control_comment" method="post" accept-charset="utf8">
	<input type="hidden" name="id" value="<?php echo $uri->segment(3); ?>" />
	<?php if (!isset($_SESSION['nick'])) { ?>
	<input value="<?php echo $uri->segment(3);?>" type="hidden" name="id" />
	Nick: <input type="text" name="nick" />
	E-mail: <input type="text" name="email" />
	<?php } ?>
	<textarea name="comment" cols="90" rows="12" id="comment" style="width:610px" ></textarea>
	<input type="submit" name="" value="Enviar" />
</form>