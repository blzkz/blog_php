	<div class='grid_9'>
		<form action="<?php echo base_url().'admin/control';?>" method="post">
			<div class='container_12'>
				<div class='grid_10'>
				<input name="title" placeholder='Title' id='title' style="width: 500px;" type="text" required>
				</div>
				<div class='grid_12'>
					<input name="url" placeholder='Image url' id='url' style="width: 500px;" type="text" required>
				</div>
				<div class='grid_12'>
					<p>
						<div class="btn-group" role="group">
							<button name="" class="btn btn-default" type="button" onclick='botones(1)'>b</button>
							<button name="" class="btn btn-default" type="button" onclick='botones(2)'>i</button>
							<button name="" class="btn btn-default" type="button" onclick='botones(3)'>[url=]</button>
							<button name="" class="btn btn-default" type="button" onclick='botones(4)'>[img]</button>
						</div>
					</p>
					<textarea name="content" cols="10" rows="10" style="width: 71%;" id="content" required></textarea>
				</div>
				<div class='grid_1'>
					<input type="submit" name="submit" class="btn btn-default" value="Enviar">
				</div>
			</div>
		</form>
	</div>

