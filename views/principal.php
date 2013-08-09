	<div class="grid_8 prefix_2">
		<div class="slider-wrapper theme-light">
	        <div id="slider" class="nivoSlider">
	            <img src="images/img1.png" data-thumb="images/img1.jpg" alt="" />
	            <a href="http://www.elosohormiguero.es"><img src="images/img1.png" data-thumb="images/img1.jpg" alt="jejeje" title="Desarrollo y diseño de El oso Hormiguero" /></a>
	            <img src="images/img1.png" data-thumb="images/img1.jpg" alt=""/>
	            <img src="images/img1.png" data-thumb="images/img1.jpg" alt="" title="#htmlcaption" />
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
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus fermentum vulputate. Nulla facilisi. Etiam ac arcu et sapien bibendum facilisis in sed nibh. Nulla scelerisque iaculis urna, sed sodales tellus tincidunt sit amet. Pellentesque sit amet augue urna. Cras porttitor metus et velit semper ultrices. Suspendisse a porttitor sapien. Mauris quam turpis, fermentum molestie placerat sit amet, placerat quis nisl.
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




