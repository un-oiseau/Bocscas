<?php
$classname = "";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('faq');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($data as $faq) { ?>
		<div class="faq-item collapse-box">
			<span class="toggller"></span>
			<h3 class="h5"><?php echo $faq['faq_item']['question']; ?></h3>
			<div class="faq-answer text-middle collapsed">
				<p><?php echo $faq['faq_item']['answer']; ?></p>
			</div>
		</div>
	<?php } ?>
</div>
