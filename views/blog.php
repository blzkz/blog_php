<div class='row'>
	<?php 
	$i = 1;
	$num_articles = count($art);
	foreach ($art as $entry)
	{
		if ($i===1)
		{
			
			echo "<div class='col-md-6'>";
			echo "<a href='".base_url().'blog/article/'.$entry['id_article']."' >".'<h3>'.$entry['title'].'</h3></a>';
			echo 'by '.$entry['author'].'<p>'.$entry['n_comments'].' comentarios.</p>'; ?>
			<div class="crop">
				<img src="<?php echo $entry['image'];?>" />
			</div>
			<?php
			echo str_replace("\n","<br>",bbcode_parser_without_img(substr($entry['content'],0,600))).'...';
			//echo "<div class='linea-3'></div>";
			echo "</div>";
			//echo "<div class='clear'></div>";
			echo "<div class='hidden-xs hidden-sm col-md-6'><h3>Últimos comentarios</h3> </div>";
			echo "</div>"; //end row
		}
		else if ($num_articles > 1)
		{
			//echo "<div class='container'>";
			if (($i%2 === 1))
			{
				echo "<div class='col-md-6'>";
			}
			else
			{
				echo "<div class='row'>";
				echo "<div class='col-md-6'>";
			}
			echo "<a href='".base_url().'blog/article/'.$entry['id_article']."' >".'<h3>'.$entry['title'].'</h3></a>';
			echo 'by '.$entry['author'].' '.$entry['n_comments'].' comentarios.'; ?>
			<div class="crop">
				<img src="<?php echo $entry['image'];?>" />
			</div>
			<?php
			echo str_replace("\n","<br>",bbcode_parser_without_img(substr($entry['content'],0,600))).'...';
			//echo "<div class='linea-1'></div>";
			echo "</div>";
			if (($i % 2) == 1)
			{
				//echo "<div class='clear'></div>";
				echo '</div>'; // end of row
			}
			//echo "</div>";
			
		}
		$i++;
	}
	if ($pagina == 1)
	{
		echo '&laquo; 1 ';
	}	
	else
	{?>
		<a href="<?php echo base_url();?>blog/page/1"> &laquo; 1</a>
	<?php } 
	if ($max_pages > 1)
	{
		for ($g = 2; $g <= $max_pages; $g++)
		{
			// Si $g es igual a la pagina en la que estamos muestra el numero pero sin enlace
			if ($g == $pagina)
			{
				echo " $g ";
			}
			// La página actual no es la 1, mostramos rango 2 por delante
			// y dos por detras de la pagina actual
			elseif (($g>=$pagina-2) && ($g<=$pagina+2))
			{
				?><a href="<?php echo base_url().'blog/page/'.$g;?>"><?php echo " $g "?></a><?php
			}
		}// for
		if ($pagina < $max_pages-2)
		{
			?>&hellip;<?php 
		}
		if ($pagina < $max_pages)
		{
			?><a href="<?php echo base_url().'blog/page/'.$max_pages;?>">&raquo;</a><?php  
		}
		else
			echo '&raquo;';
	}
	?>
	