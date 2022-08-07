<?php
$classname = "top-offer";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$cas = get_field('casino');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="cas-row">
        <?php $spec = $cas['specifications']; $prop = $spec['properties'];$icon_row = $spec['works_on']; $icon_item = $icon_row['device_icons']; ?>
        <div class="col-8">
            <div class="cas-item">
                <div class="cas-head">
                    <h6 class="text-dark mb-0"><?php echo $cas['title'] ?></h6>
                </div>
                <div class="bg-light">
                    <div class="cas-body">
                        <div class="cas-row">
                            <div class="col-6 cas-spec">
                                <?php foreach ($prop as $p):?>
                                    <p class="text-large">
                                        <span><?php echo $p['key']; ?></span>
                                        <b class="text-dark"><?php echo $p['value']; ?></b>
                                    </p>
                                <?php endforeach; ?>

                                <p class="text-large">
                                    <span><?php echo $icon_row['text']; ?></span>
                                    <?php if ($icon_item) : ?>
                                        <?php foreach ($icon_item as $i):?>
                                            <img src="<?php echo $i['icon']['url']; ?>" alt="<?php echo $i['icon']['alt']; ?>" title="<?php echo $i['icon']['title']; ?>" />
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </p>

                                <?php $link = $cas['button_link']; ?>
                                <?php if ($link) : ?>
                                    <button type="button" class="btn-cas" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                                <?php endif; ?>
                            </div>
                            <div class="col-6">
                                <?php $image = $cas['image'];?>
                                <?php if ($image) : ?>
                                    <img class="w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
