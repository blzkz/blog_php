	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/controlPage';?>" method="post">
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='name'>Name: </label></div>
				<div class='grid_10'><input name="name" id='name' type="text" required></div>
				<div class='grid_2' style='text-align:right'><label for='file'>File name: </label></div>
				<div class='grid_10'><textarea name="file" id='file' type="text" required></textarea> </div>
			</div>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>
