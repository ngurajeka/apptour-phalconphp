<div class="container">
	<h1 class="section-title"><span><i class="mdi-hardware-keyboard-alt"></i><?php echo $category->name; ?></span></h1>

	<div class="row">

	<?php foreach ($places as $place) { ?>
		<a href="<?php echo $this->url->get('places/show/' . $place->urlname); ?>">
			<div class="col s12 m4">
				<div class="card small">
					<div class="card-image">
						<?php echo $this->tag->image(array('assets/images/' . $place->images)); ?>
						<span class="card-title"><?php echo $place->name; ?></span>
					</div>
					<div class="card-content">
						<p class="black-text"><?php echo $place->description; ?></p>
					</div>
				</div>
			</div>
		</a>
	<?php } ?>

	</div>

</div>