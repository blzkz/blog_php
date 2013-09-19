	<div class='grid_3'>
		<div class="accordion" id="accordion1">
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle bold" data-parent="#accordion1" href="<?php echo base_url();?>admin">
						Dashboard
					</a>
				</div>
				<div class="accordion-heading">
					<a class="accordion-toggle bold" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
						Articles
					</a>
				</div>
				<div id="collapseOne" class='accordion-body collapse <?php echo ($z==='Ent') ? 'in' : 'out';?>'>
					<div class='accordion-inner'>
						<ul class="unstyled">
							<li><a href="<?php echo base_url().'admin/newArticle/';?>">Write article</a></li>
							<li><a href="<?php echo base_url().'admin/manageArticles/';?>">Manage articles</a></li>
							<li><a href="<?php echo base_url().'admin/manageComments/';?>">Manage comments</a></li>
							<li><a href="<?php echo base_url().'admin/manageCategories/';?>">Manage categories</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion-heading">
					<a class="accordion-toggle bold" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
						Works
					</a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse <?php echo ($z==='Wor')? 'in' : 'out';?> ">
					<div class='accordion-inner'>
						<ul class="unstyled">
							<li><a href="<?php echo base_url().'admin/addWork/';?>">New</a></li>
							<li><a href="<?php echo base_url().'admin/manageWorks/';?>">Manage</a></li>
						</ul>
					</div>
				</div>
				<div class="accordion-heading">
					<a class="accordion-toggle bold" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
						Pages
					</a>
				</div>
				<div id="collapseThree" class="accordion-body collapse <?php echo ($z==='Pag')? 'in' : 'out';?>">
					<div class='accordion-inner'>
						<ul class="unstyled">
							<li>New</li>
							<li>Manage</li>
						</ul>
					</div>
				</div>
				<div class="accordion-heading">
					<a class="accordion-toggle bold" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
						Settings
					</a>
				</div>
				<div id="collapseFour" class="accordion-body collapse <?php echo ($z==='Set')? 'in' : 'out';?>">
					<div class='accordion-inner'>
						<ul class="unstyled">
						<li><a href="<?php echo base_url().'admin/manageSlider/';?>">Slider</a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</div>