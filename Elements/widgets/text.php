<?php
/**
 * テキスト
 * 呼出箇所：ウィジェット
 */
?>
<div class="widget widget-text widget-text-<?php echo $id ?>">
	<?php if ($name && $use_title): ?>
		<h4><?php echo $name ?></h4>
	<?php endif ?>
	<?php echo $text ?>
</div>