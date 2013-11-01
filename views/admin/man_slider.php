	<div class='grid_9'>
		<table class='table table-hover'>
			<thead>
				<tr>
					<th>#</th>
					<th>link</th>
					<th>image</th>
					<th>description</th>
					<!-- <th>Comments</th>  -->
					<th>Options</th>
					<th><a href='<?php echo base_url();?>admin/addSlider'><img class='img-grey' src='<?php echo base_url();?>images/plus.png'> New</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($slides as $slide) {?>
				<tr>
					<td><?php echo $slide['id'];?></td>
					<td><?php echo $slide['link'];?></td>
					<td><?php echo $slide['img_url'];?></td>
					<td><?php echo $slide['description'];?></td>
					<td>
						<a href="<?php echo base_url().'admin/editSlide/'.$slide['id'];?>">
							<img class='img-grey' title ='Edit slide' alt='Edit slide' src='<?php echo base_url();?>images/edit.png'>
						</a>
						<a href="<?php echo base_url().'admin/deleteSlide/'.$slide['id'];?>">
							<img class='img-grey' title='Delete slide'alt='Delete slide' src='<?php echo base_url();?>images/delete.png'>
						</a>
					</td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>