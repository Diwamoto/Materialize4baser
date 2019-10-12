<?php
/**
 * ローカルナビ
 * 呼出箇所：ウィジェット
 */
if (!isset($this->BcPage)) {
	return;
}
$pageCategory = $this->BcPage->getCategory();
if (!$pageCategory) {
	return;
}
?>


<div class="widget widget-local-navi widget-local-navi-<?php echo $id ?>">
	<?php if ($use_title): ?>
		<h4><?php echo $pageCategory['title'] ?></h4>
	<?php endif ?>
	<!-- /Elements/page_list.php -->
	<?php $this->BcBaser->element('page_list', array('categoryId' => $pageCategory['id'])) ?>
</div>