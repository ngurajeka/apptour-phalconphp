<div class="navbar-fixed">
	<nav class="indigo" role="navigation">
		<div class="container">
			<div class="nav-wrapper">
				<?php echo $this->tag->linkTo(array('', 'Jelajah Bulukumba', 'id' => 'logo-container', 'class' => 'brand-logo')); ?>
				<ul class="right side-nav" id="nav-mobile">
					<li><?php echo $this->tag->linkTo(array('', 'Beranda')); ?></li>
					<li><?php echo $this->tag->linkTo(array('category', 'Kategori')); ?></li>
					<li><?php echo $this->tag->linkTo(array('about', 'Tentang')); ?></li>
				</ul>
			</div>
		</div>
	</nav>
</div>