	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/edit/'.$id;?>" method="post">
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='title'>Title: </label></div>
				<div class='grid_10'><input name="title" id='title' type="text" value='<?php echo $article['title']; ?>'></div>
			</div>
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='url'>Image url: </label></div>
				<div class='grid_10'><input name="url" id='url' type="text" value='<?php echo $article['image']; ?>'></div>
			</div>
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='password'>Content: </label></div>
				<div class='grid_10'><textarea name="content" id="content"><?php echo $article['content']; ?></textarea></div>
			</div>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>