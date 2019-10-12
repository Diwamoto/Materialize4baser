<?php
if (empty($this->Paginator)) {
	return;
}
if (!isset($modules)) {
	$modules = 8;
}
?>


<?php if ((int) $this->Paginator->counter(array('format' => '%pages%')) > 1): ?>
<ul class="pagination center-align">
	<?php echo $this->Paginator->prev('<', array('class' => '', 'tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li')) ?>
	<?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'class' => 'waves-effect number', 'modulus' => $modules)) ?>
	<?php echo $this->Paginator->next('>', array('class' => '', 'tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li')) ?>
</ul>
<?php endif; ?>