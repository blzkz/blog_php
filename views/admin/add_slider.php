	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/controlSlider';?>" method="post">
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='link'>Link: </label></div>
				<div class='grid_10'><input name="link" id='link' type="text"></div>
				<div class='grid_2' style='text-align:right'><label for='url_img'>Imagen: </label></div>
				<div class='grid_10'><input name="url_img" id='url_img' type="text"></div>
				<div class='grid_2' style='text-align:right'><label for='link'>descripción: </label></div>
				<div class='grid_10'><textarea name="description" required></textarea> </div>
			</div>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>
