	<div class='grid_9'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>#</th>
					<th>Page name</th>
					<th>Static Link</th>
					<th>File Name</th>
					<th>Options</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pages as $page) {?>
				<tr>
					<td><?php echo $page['id'];?></td>
					<td><?php echo $page['name'];?></td>
					<td><?php echo $page['file'];?></td>
					<td><?php echo $page['url'];?></td>
					<td>
						<a href="<?php echo base_url().'admin/editPage/'.$page['id'];?>">
							<img class='img-grey' title ='Edit Work' alt='Edit page' src='<?php echo base_url();?>images/edit.png'>
						</a>
						<a href="<?php echo base_url().'admin/deletePage/'.$page['id'];?>">
							<img class='img-grey' title='Delete page'alt='Delete page' src='<?php echo base_url();?>images/delete.png'>
						</a>
					</td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>