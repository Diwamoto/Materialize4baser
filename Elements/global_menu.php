<?php
/**
 * [PUBLISH] サイトマップ
 * @var BcAppView $this
 */

if (!isset($level)) {
	$level = 1;
}
if(!isset($currentId)) {
	$currentId = null;
}
?>


<?php if (isset($tree)): ?>
    <?php foreach ($tree as $content): ?>
        <?php if ($content['Content']['title']): ?>
            <?php
            if(!empty($content['Content']['exclude_menu'])) {
                continue;
            }
            $liClass = 'menu-content li-level-' . $level;
            if($content['Content']['id'] == $currentId || $this->BcBaser->isContentsParentId($currentId, $content['Content']['id'])) {
                $liClass .= ' current';
            }
            $options = ['escape' => true];
            if(!empty($content['Content']['blank_link'])) {
                $options['target'] = '_blank';
            }
            ?>
            <li class="nav-item <?php echo $liClass ?>"><?php $this->BcBaser->link($content['Content']['title'], $this->BcBaser->getContentsUrl($content['Content']['url'], false, null, false), $options) ?>
                <?php if (!empty($content['children'])): ?>
                    <div class="sub-nav">
                        <?php $this->BcBaser->element('contents_menu', array('tree' => $content['children'], 'level' => $level + 1, 'currentId' => $currentId)) ?>
                    </div>
                <?php endif ?>
            </li>
        <?php endif ?>
    <?php endforeach; ?>
<?php endif ?>