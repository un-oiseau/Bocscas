<?php
$classname = "ordered_list";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('steps');
?>
<ol class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($data as $item) { ?>
		<li>
            <h3 class="mb-1 h6 text-blue"><?php echo $item['step']['title']; ?></h3>
			<p class="mb-0 text-small"><?php echo $item['step']['text']; ?></p>
		</li>

	<?php } ?>
</ol>
