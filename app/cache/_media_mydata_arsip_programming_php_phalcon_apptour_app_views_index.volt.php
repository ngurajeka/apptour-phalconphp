<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/assets/stylesheets/materialize.min.css" rel="stylesheet" type="text/css" />
		<link href="/assets/stylesheets/custom.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php if ($appbar) { ?>
			<?php echo $this->partial('layouts/appbar'); ?>
		<?php } ?>
		<?php echo $this->getContent(); ?>
	</body>
</html>
