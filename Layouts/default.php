	<!DOCTYPE html>
	<html lang="ja">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1"/>
			<?php $this->BcBaser->title() ?>
			<?php $this->BcBaser->metaDescription() ?>
			<?php $this->BcBaser->metaKeywords() ?>
			
			<!-- CSS  -->
			<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link href="<?php $this->BcBaser->themeUrl() ?>css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			<link href="<?php $this->BcBaser->themeUrl() ?>css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			
			<!--  Scripts-->
			<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="<?php $this->BcBaser->themeUrl() ?>js/materialize.js"></script>
			<script src="<?php $this->BcBaser->themeUrl() ?>js/init.js"></script>
			<?php $this->BcBaser->scripts() ?>
		</head>
		<body>
			<?php $this->BcBaser->element('header');?>

			<?php if ($this->BcBaser->isHome()): ?>
				<?php $this->BcBaser->element('top') ?>
			<?php else:?>
				<?php $this->BcBaser->content() ?>
			<?php $this->BcBaser->crumbsList(); ?>
				<div class="container">
					<div class="row">
						<div class="col s12 m8 l9">
							<?php if ($this->BcBaser->isPage()): ?>
							<h2><?php echo $this->BcBaser->getContentsTitle() ?></h2>
							<?php endif ?>
							<?php $this->BcBaser->content() ?>
						</div>
						<div class="col s12 m4 l3">
							<?php $this->BcBaser->widgetArea() ?>
						</div>
					</div>
				</div>
				<?php $this->BcBaser->contentsNavi() ?>
			<?php endif;?>
			<?php $this->BcBaser->element('footer');?>

			<?php $this->BcBaser->func() ?>

		</body>
	</html>
