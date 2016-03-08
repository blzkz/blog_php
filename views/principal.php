	<div class="row">
	<div class="col-md-8 col-md-offset-4">
		<div class="slider-wrapper theme-light">
	        <div id="slider" class="nivoSlider">
	        	<a href="http://www.blzkz.es/blog/article/14"><img src="http://i.imgur.com/9Fu7fFa.png" data-thumb="http://i.imgur.com/K8a9L9g.png" alt="" title="Desarrollando videjuegos: experiencia personal"/></a>
	            <img src="http://i.imgur.com/K8a9L9g.png" data-thumb="http://i.imgur.com/K8a9L9g.png" alt="" title="Interiores de la web"/>
	            <a href="http://www.vaenserie.com"><img src="images/img1.png" data-thumb="images/img1.jpg" alt="eoh" title="Desarrollo y diseño de vaenserie.com (El oso Hormiguero)" /></a>
	        </div>
	        <div id="htmlcaption" class="nivo-html-caption">
	            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
	        </div>
	    </div>
	</div>
	</div>
	<!-- <div class='grid_12 linea-3'> </div>
	<div class='grid_12 linea-3'> </div> -->

	<div class='row'>
	<?php
	foreach ($ent as $entry)
	{?>
		<div class='col-md-6'>
			<h4 class='title-black bottom-dotted'><?php echo $entry['title'];?></h4>
			<?php echo substr(bbcode_parser_without_img($entry['content']),0,600).'...'; ; ?>
			<br />
			<?php echo "<a href='".base_url().'blog/article/'.$entry['id_article']."' >".'leer más</a>'; ?>
		</div>
	<?php } ?>
	</div>
	<div class='row'>
		<div class="col-md-4">
			<h3 class='title-black bottom-dotted'>Trabajos</h3>
			<ul>
				<li><img src="http://i.imgur.com/blEX7XS.png" height="35" width="80"> blzkz.es</li>
				<li><img src="images/img1.png" height="35" width="80"><a href="http://vaenserie.com">vaenserie.com</a></li>
			</ul>
		</div>
		<div class="col-md-4">
			<h3 class='title-black bottom-dotted'>Sobre mi..</h3>
			Me llamo Sergio Blázquez y soy ingeniero técnico en informática de gestión.
			<br>
			<a href='#'>Ver cv</a>
		</div>
		<div class="col-md-4">
			<h3  class='title-black bottom-dotted'>Twitter</h3>
			
		</div>
	</div>




