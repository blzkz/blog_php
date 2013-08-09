
		<h1>Login</h1>
		<div class='container_6'>
			<?php if ($error) {?>
			<h4>Nick or password incorrect</h4>
			<?php }?>
			<form action="<?php echo base_url().'login/control';?>" method="post">
				<div class='container_12'>
					<div class='grid_2' style='text-align:right'><label for='nick'>Nick: </label></div>
					<div class='grid_2'><input name="nick" id='nick' type="text"></div>
				</div>
				<div class='container_12'>
					<div class='grid_2' style='text-align:right'><label for='password'>Password: </label></div>
					<div class='grid_2'><input name="password" id='password' type="password"></div>
				</div>
			<div class='prefix_1'><input type="submit" name="submit" value="Enviar"></div>
			</form>
		</div>