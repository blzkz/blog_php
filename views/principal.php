	<div class="grid_8 prefix_2">
		<div class="slider-wrapper theme-light">
	        <div id="slider" class="nivoSlider">
	            <img src="http://i.imgur.com/K8a9L9g.png" data-thumb="http://i.imgur.com/K8a9L9g.png" alt="" title="Interiores de la web"/>
	            <a href="http://www.vaenserie.com"><img src="images/img1.png" data-thumb="images/img1.jpg" alt="eoh" title="Desarrollo y diseño de vaenserie.com (El oso Hormiguero)" /></a>
	        </div>
	        <div id="htmlcaption" class="nivo-html-caption">
	            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
	        </div>
	    </div>
	</div>
	<!-- <div class='grid_12 linea-3'> </div>
	<div class='grid_12 linea-3'> </div> -->

	<div class='container_12'>
	<?php
	foreach ($ent as $entry)
	{?>
		<div class='grid_6'>
			<h3 class='title-black bottom-dotted'><?php echo $entry['title'];?></h3>
			<?php echo substr($entry['content'],0,600).'...'; ; ?>
		</div>
	<?php } ?>
	</div>
	<div class='container_12'>
		<div class="grid_4">
			<h3 class='title-black bottom-dotted'>Trabajos</h3>
			<ul>
				<li><img src="http://i.imgur.com/blEX7XS.png" height="35" width="80"> blzkz.es</li>
				<li><img src="images/img1.png" height="35" width="80"><a href="http://vaenserie.com">vaenserie.com</a></li>
			</ul>
		</div>
		<div class="grid_4">
			<h3 class='title-black bottom-dotted'>Sobre mi..</h3>
			Me llamo Sergio Blázquez y soy estudiante de ingeniería técnica informática de gestión.
			<br>
			<a href='#'>Ver cv</a>
		</div>
		<div class="grid_4">
			<h3  class='title-black bottom-dotted'>Twitter</h3>
			
		</div>
	</div>




