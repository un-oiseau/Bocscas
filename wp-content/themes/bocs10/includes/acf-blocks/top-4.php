<?php
$classname = "top-4";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('casino');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="four-cards">
        <?php $logo = $data['logo']; ?>
        <div class = "cas-hat flex-box">
            <?php if ($logo) : ?>
                <p class="cas-badge mb-0"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>"></p>
            <?php endif; ?>
            <p class="cas-title h4">
                <?php echo $data['title'] ?>
            </p>
        </div>
        <div class="cas-desc text-center text-middle">
            <?php echo $data['main_description'] ?>
        </div>
        <?php foreach ($data['four_cards'] as $item):?>
            <div class="flex-box four-cards-item">
                <?php $image = $item['image']; ?>
                <?php if ($image) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                <?php endif; ?>
                <div class="item-desc text-middle text-semibold">
                    <p><?php echo $item['description']['key']; ?></p>
                    <span class="text-dark"><?php echo $item['description']['value']; ?></span>
                </div>

                <?php $link = $item['button']; ?>
                <?php if ($link) : ?>
                    <button type="button" class="btn-cas" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
