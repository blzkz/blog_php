			<div class='row'>
				<div class='col-md-12'>
					<h1>Login</h1>
				</div>
			</div>
			<?php if ($error) {?>
			<h4>Nick or password incorrect</h4>
			<?php }?>
			<form action="<?php echo base_url().'login/control';?>" method="post">
				<div class='row'>
					<div class='col-md-1'><label for='nick'>Nick: </label></div>
					<div class='col-md-2'><input name="nick" id='nick' type="text"></div>
				</div>
				<div class='row'>
					<div class='col-md-1'><label for='password'>Password: </label></div>
					<div class='col-md-2'><input name="password" id='password' type="password"></div>
				</div>
			<div class='col-md-2 col-md-offset-1'><input type="submit" name="submit" value="Enviar"></div>
			</form>
