<?php
/**
 * サイト内検索
 * 呼出箇所：ウィジェット
 */
if (!empty($this->passedArgs['num'])) {
	$url = array('plugin' => null, 'controller' => 'contents', 'num' => $this->passedArgs['num']);
} else {
	$url = array('plugin' => null, 'controller' => 'contents');
}
?>


<div class="widget widget-site-search widgetsite-search-<?php echo $id ?>">
	<?php if ($name && $use_title): ?>
		<h4><?php echo $name ?></h4>
	<?php endif ?>
	<?php echo $this->BcForm->create('Content', array('type' => 'get', 'action' => 'search', 'url' => $url)) ?>
	<?php if (BcUtil::unserialize($this->BcBaser->siteConfig['content_categories'])) : ?>
		<?php echo $this->BcForm->input('Content.c', array('type' => 'select', 'options' => BcUtil::unserialize($this->BcBaser->siteConfig['content_categories']), 'empty' => 'カテゴリー： 指定しない　')) ?>
	<?php endif ?>
	<?php echo $this->BcForm->input('Content.q', array('placeholder' => 'input keyword')) ?>
	<?php echo $this->BcForm->submit('検索', array('div' => false, 'class' => 'btn align-right button-small')) ?>
	<?php echo $this->BcForm->end() ?>
</div>