<h2><?php echo $ent['title']; ?></h2>
<div class="img" style="background: url(<?php echo $ent['image'];?>) no-repeat; background-position: center"></div>
<p>
<?php echo str_replace("\n","<br>",bbcode_parser($ent['content'])); ?>
</p>
<div class="linea-1"></div>
<h3>Comentarios:</h3>
<?php
$i = 1;
foreach ($com as $comment) {
	echo "<p><h4>".$i.". ".$comment['nick']."</h4></p>";
	echo "<p>".bbcode_parser_without_img($comment['comment'])."</p>";
	$i++;
}
?>
<p>¿Tienes opinión? ¡Pues ya sabes!</p>
<form action="<?php echo base_url(); ?>blog/control_comment" method="post" accept-charset="utf8">
	<input type="hidden" name="id" value="<?php echo $uri->segment(3); ?>" />
	<?php if (!isset($_SESSION['nick'])) { ?>
	<input value="<?php echo $uri->segment(3);?>" type="hidden" name="id" />
	<div class="input-group">
  	<input type="text" name="nick" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
  	<input type="text" name="email" class="form-control" placeholder="something@site.com" aria-describedby="basic-addon1">
	</div>
	<?php } ?>
	<textarea name="comment" rows="12" id="comment" style="width:610px" ></textarea>
	<input type="submit" name="" value="Enviar" />
</form>