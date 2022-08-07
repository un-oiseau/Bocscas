<?php
$classname = "cas-row";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$games = get_field('casinos');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="col-6">
        <div class="cas-row">
            <?php foreach ($games as $item): $data = $item['casino_item'];?>
                <div class="col-3">
                    <div class="bg-light linked text-center">
                        <?php $logo = $data['image']; ?>
                        <?php if ($logo) :  ?>
            				<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
            			<?php endif; ?>
                        <?php $link = $data['link']; ?>
                        <?php if ($link) : ?>
                            <a class="h7" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
