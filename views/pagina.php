<div class="grid_8 prefix_2">
	<?php
	foreach ($articles as $entry)
	{
		echo "<h3 class='title-green'>".$entry['title'].'</h3>';
		echo "<div class='author'>".'Author: '.$entry['author'].' '.$entry['n_comments'].' comentarios.</div><br>';
		echo bbcode_parser_without_img($entry['content']);
		echo '<div class="linea-1"></div>';
	}?>

	<?php
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
	} ?>
</div>