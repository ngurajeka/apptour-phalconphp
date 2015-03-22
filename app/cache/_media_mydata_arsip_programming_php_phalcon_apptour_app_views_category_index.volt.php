<div class="container">

	<div class="row">

	<?php foreach ($categories as $category) { ?>
		<div class="col s12 m4">
			<div class="card small">
				<div class="card-image">
					<?php echo $this->tag->image(array('assets/images/apparalang.jpg')); ?>
					<span class="card-title"><?php echo $category->name; ?></span>
				</div>
				<div class="card-content">
					<p><?php echo $category->description; ?></p>
				</div>
				<div class="card-action">
					<?php echo $this->tag->linkTo(array('category/show/' . $category->urlname, 'Daftar Tempat')); ?>
				</div>
			</div>
		</div>
	<?php } ?>

	</div>

</div>