	<div class='grid_9'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th># Article</th>
					<th>Nick</th>
					<th>Comment</th>
					<!-- <th>Comments</th>  -->
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($comments as $comment) {?>
				<tr>
					<td><?php echo $comment['id_entry'];?></td>
					<td><?php echo $comment['nick'];?></td>
					<td><?php echo substr($comment['comment'],0,80); ?></td>
					<td>
						<a href="<?php echo base_url().'admin/editComment/'.$comment['id'];?>">
							<img class='img-grey' src='<?php echo base_url();?>images/edit.png'>
						</a>
						<a href="<?php echo base_url().'admin/deleteComment/'.$comment['id'];?>">
							<img class='img-grey' src='<?php echo base_url();?>images/delete.png'>
						</a>
					</td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>