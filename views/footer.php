		<div class="push"></div>
		</div>
		<footer>
		<script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider({
			effect: 'fade',
			directionNav: 'false'});
	    });
	    </script>
	    <div class="container_12">
	    	<div class='footer'>Diseño y programación por blzkz. Todos los derechos reservados.<br>
	    	<?php
				if (isset($_SESSION['nick'])) {?>
					<?php echo $_SESSION['nick'];?> <a href="<?php echo base_url().'login/logout';?>">Logout</a>
					<?php
					if ($_SESSION['nick'] === 'blzkz')
					{?>
					<a href="<?php echo base_url().'admin';?>">Admin</a>
				<?php } 
				}
				else 
				{ ?>
					<a href="<?php echo base_url().'login';?>">Login</a>
				<?php } ?>	
	    	</div>
	    </div>
	    </footer>
	</body>
</html>