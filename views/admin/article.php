	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/control';?>" method="post">
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='title'>Title: </label></div>
				<div class='grid_10'><input name="title" id='title' type="text" required></div>
			</div>
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='url'>Image url: </label></div>
				<div class='grid_10'><input name="url" id='url' type="text" required></div>
			</div>
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='content'>Content: </label></div>
				<div class='grid_10'><textarea name="content" id="content" required></textarea></div>
			</div>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>
