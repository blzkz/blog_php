	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/controlCom/'.$id;?>" method="post">
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='email'>Email: </label></div>
				<div class='grid_10'><input name="email" id='email' type="text" value='<? echo $comment['email']; ?>'></div>
			</div>
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='IP'>IP: </label></div>
				<div class='grid_10'><input name="IP" id='IP' type="text" value='<? echo $comment['IP']; ?>'></div>
			</div>
			<div class='container_12'>
				<div class='grid_2' style='text-align:right'><label for='comment'>Comment: </label></div>
				<div class='grid_10'><textarea name="comment" id="comment"><? echo $comment['comment']; ?></textarea></div>
			</div>
			<input type="submit" name="submit" value="Enviar">
		</form>
	</div>