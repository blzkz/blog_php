	<div class='grid_9'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<!-- <th>Comments</th>  -->
					<th>Options</th>
					<th><a href='<?php echo base_url();?>admin/addCategory'><img class='img-grey' src='<?php echo base_url();?>images/plus.png'> New</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($categories as $category) {?>
				<tr>
					<td><?php echo $category['id'];?></td>
					<td><?php echo $category['name'];?></td>
					<td>
						<a href="<?php echo base_url().'admin/editCategory/'.$category['id'];?>">
							<img class='img-grey' title ='Edit category' alt='Edit category' src='<?php echo base_url();?>images/edit.png'>
						</a>
						<a href="<?php echo base_url().'admin/deleteCategory/'.$category['id'];?>">
							<img class='img-grey' title='Delete category'alt='Delete category' src='<?php echo base_url();?>images/delete.png'>
						</a>
					</td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>