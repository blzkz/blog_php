	<div class='grid_9'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<!-- <th>Comments</th>  -->
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($articles as $article) {?>
				<tr>
					<td><?php echo $article['id_articles'];?></td>
					<td><?php echo $article['title'];?></td>
					<td>
						<a href="<?php echo base_url().'admin/editArticle/'.$article['id_articles'];?>">
							<img class='img-grey' src='<?php echo base_url();?>images/edit.png'>
						</a>
						<a href="<?php echo base_url().'admin/deleteArticle/'.$article['id_articles'];?>">
							<img class='img-grey' src='<?php echo base_url();?>images/delete.png'>
						</a>
					</td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>