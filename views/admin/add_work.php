	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/controlWork';?>" method="post">
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='job'>Job: </label></div>
				<div class='grid_10'><input name="job" id='job' type="text" required></div>
				<div class='grid_2' style='text-align:right'><label for='link'>Link: </label></div>
				<div class='grid_10'><input name="link" id='link' type="text" required></div>
				<div class='grid_2' style='text-align:right'><label for='image'>Image: </label></div>
				<div class='grid_10'><input name="image" id='image' type="text" required></div>
				<div class='grid_2' style='text-align:right'><label for='description'>Description: </label></div>
				<div class='grid_10'><input name="description" id='description' type="text" required></div>
			</div>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>
