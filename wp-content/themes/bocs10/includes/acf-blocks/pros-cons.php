<?php
$classname = "pros_cons cas-row";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$green_data = get_field('green_list_group');
$red_data = get_field('red_list');
?>
<div class="<?php echo esc_attr($classname) ?>">
<div class="col-6">
    <div class="green-list">
        <?php if ($green_data['title']): ?>
				<p class="h6 list-title"><span></span><?php echo $green_data['title']; ?>
                </p>
			<?php endif; ?>
			<ul>
				<?php foreach ($green_data['green_list'] as $li) { ?>
					<li><?php echo $li['item']; ?></li>
				<?php } ?>
			</ul>
    </div>
</div>
<div class="col-6">
    <div class="red-list">
			<?php $red_data = get_field('red_list_group'); ?>

			<?php if ($red_data['title']): ?>
				<p class="h6 list-title"><span></span><?php echo $red_data['title']; ?></p>
			<?php endif; ?>
			<ul>
				<?php foreach ($red_data['red_list'] as $li) { ?>
					<li><?php echo $li['item']; ?></li>

				<?php } ?>
			</ul>
		</div>
    </div>
</div>
