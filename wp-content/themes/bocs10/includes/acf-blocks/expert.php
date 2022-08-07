<?php
$classname = "expert-box";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="flex-box">
        <div class="expert-card">
    		<div class="expert-img">
    			<?php $logo = get_field('photo'); ?>
    			<?php if ($logo) :  ?>
    				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
    			<?php endif; ?>
    		</div>
    		<div class="expert-info">
    			<p class="h6 text-dark mb-0"><?php echo get_field('personal_data')['full_name']; ?></p>
    			<p class="text-small"><?php echo get_field('personal_data')['position']; ?></p>
    		</div>
    	</div>
    	<div class="expert-review">
    		<?php if (get_field('text')): ?>
                <p class="text-middle mb-0"><?php echo get_field('text'); ?></p>
    		<?php endif; ?>
    	</div>
    </div>
</div>
