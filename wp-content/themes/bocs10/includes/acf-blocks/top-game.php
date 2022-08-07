<?php
$classname = "top-offer peaky-box";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$cas = get_field('casino');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="cas-row">
        <?php $spec = $cas['specifications']; $prop = $spec['properties'];$icon_row = $spec['works_on']; $icon_item = $icon_row['device_icons']; ?>
        <div class="col-7-5">
            <div class="cas-item">
                <div class="cas-head">
                    <h6 class="text-dark mb-0"><?php echo $cas['title'] ?></h6>
                </div>
                <div class="bg-light">
                    <div class="cas-body">
                        <div class="cas-row">
                            <div class="col-6">
                                <?php $image = $cas['image'];?>
                                <?php if ($image) : ?>
                                    <img class="w-100" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col-6 cas-spec">
                                <table>
                                    <?php foreach ($prop as $p):?>
                                        <tr class="text-small">
                                            <td><?php echo $p['key']; ?></td>
                                            <td class="text-dark text-semibold"><?php echo $p['value']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                                <p class="h7"><?php echo $cas['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4-5">
            <?php foreach (get_field('casino_item') as $item):?>
                <div class="four-cards">
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
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
