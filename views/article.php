<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2><?php echo $ent['title']; ?></h2>
	</div> <!-- col -->
</div> <!-- row -->	
<div class="row">
	<div class="col-md-8 col-md-offset-2">
			<div class="crop">
				<img src="<?php echo $ent['image'];?>" />
			</div>
	</div> <!-- col -->
</div> <!-- row -->		
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<?php echo str_replace("\n","<br>",bbcode_parser($ent['content'])); ?>
	</div> <!-- col -->
</div> <!-- row -->	
<div class="linea-1"></div>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h3>Comentarios:</h3>
	</div> <!-- col -->
</div> <!-- row -->
			<?php
			$i = 1;
			foreach ($com as $comment) {				
				echo "<div class='row'><div class='col-md-8 col-md-offset-2'><h4>".$i.". ".$comment['nick']."</h4></div></div>";
				echo "<div class='row'><div class='col-md-8 col-md-offset-2'>".bbcode_parser_without_img($comment['comment'])."</div></div>";
				$i++;
			}
			?>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	¿Tienes opinión? ¡Pues ya sabes!
	</div> <!-- col -->
</div> <!-- row -->
<div class="row">
	<div class="col-md-8 col-md-offset-2">
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
	</div> <!-- col -->
</div> <!-- row -->