
<div class="container">
	<h2><?php $this->Blog->title() ?></h2>
	<?php if (!empty($posts)): ?>
		<?php foreach ($posts as $post): ?>
	<article class="post clearfix z-depth-2">
		<?php $this->Blog->eyeCatch($post, array('link' => false, 'width' => 300)) ?>
		<h4><?php $this->Blog->postTitle($post) ?></h4>
		<div class="col s12 divider"></div>
		<?php $this->Blog->postContent($post, false, false) ?>
		<div class="meta">
			<?php $this->Blog->category($post) ?>
			&nbsp;
			<?php $this->Blog->postDate($post) ?>
			&nbsp;
			<?php $this->Blog->author($post) ?>
			<?php $this->BcBaser->element('blog_tag', array('post' => $post)) ?>
		</div>
	</article>
		<?php endforeach; ?>
	<?php else: ?>
	<p class="no-data"><?php echo __('記事がありません。'); ?></p>
	<?php endif; ?>
</div>

<!-- /Elements/paginations/simple.php -->
<?php $this->BcBaser->pagination('simple'); ?>