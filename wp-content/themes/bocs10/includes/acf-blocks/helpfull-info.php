<?php
$classname = "helpful_info";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}

?>
<div class="<?php echo esc_attr($classname) ?>">
    <?php $data = get_field('title');?>
    <h6 class="text-dark"><?php echo $data; ?></h6>
    <?php $data = get_field('text');?>
    <p class="mx-auto mb-0 text-middle"><?php echo $data; ?></p>
</div>
