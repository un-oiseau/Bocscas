<?php
$classname = "important_info";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('text');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <p class="text-darkblue text-center h5 mb-0 mx-auto"><?php echo $data; ?></p>
</div>
