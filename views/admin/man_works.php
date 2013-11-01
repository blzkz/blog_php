	<div class='grid_9'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>#</th>
					<th>Job name</th>
					<th>Link</th>
					<th>Options</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($works as $work) {?>
				<tr>
					<td><?php echo $work['id'];?></td>
					<td><?php echo $work['job'];?></td>
					<td><?php echo $work['link'];?></td>
					<td>
						<a href="<?php echo base_url().'admin/editWork/'.$work['id'];?>">
							<img class='img-grey' title ='Edit Work' alt='Edit work' src='<?php echo base_url();?>images/edit.png'>
						</a>
						<a href="<?php echo base_url().'admin/deleteWork/'.$work['id'];?>">
							<img class='img-grey' title='Delete work'alt='Delete work' src='<?php echo base_url();?>images/delete.png'>
						</a>
					</td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>