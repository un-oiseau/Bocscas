<?php
$classname = "brand-page";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<?php $data = get_field('block_1'); ?>
<div class="<?php echo esc_attr($classname) ?>">

    <div class="cas-row">
        <div class="col-85">
            <div class="casino-review bg-light">
                <h1 class="h3 mt-0"><?php echo $data['title']; ?>
                    <?php $logo = $data['logo']; ?>
                    <?php if ($logo ) : ?>
                        <img src="<?php echo $logo ['url']; ?>" alt="<?php echo $logo ['alt']; ?>" title="<?php echo $logo ['title']; ?>" class="f-right">
                    <?php endif; ?>
                </h1>

                <div class="text-middle">
                    <?php echo $data['text_area'] ?>
                </div>

                <div class="cas-row">
                    <div class="col-5 brand-img">
                        <?php $image = $data['image']; ?>
                        <?php if ($image) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="col-7 pro-con">
                        <p class="h6"><?php echo $data['block_title'] ?></p>
                        <ul class="checked-list">
                            <?php foreach ($data['green_list'] as $li) { ?>
                                <li class="text-small"><?php echo $li['item']; ?></li>
                            <?php } ?>
                        </ul>
                        <hr>
                        <ul class="unchecked-list">
                            <?php foreach ($data['red_list'] as $li) { ?>
                                <li class="text-small"><?php echo $li['item']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php $data = get_field('block_2'); ?>
            <h3><?php echo $data['title'] ?></h3>
            <div class="text-middle">
                <?php echo $data['text'] ?>
            </div>
            <div class="cas-row">
                <?php $images =  $data['images'];?>
                <?php foreach ($images as $item): $image = $item['image']; ?>
                    <div class="col-4">
                        <img class="brand-cas-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-35">
            <div class="list-card bg-light">
            <?php $data = get_field('block_3'); ?>
                <div class="slot-game-item">
                    <?php $logo = $data['image']; ?>
    				<div class="game-logo">
    					<?php if ($logo) :  ?>
    						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
    					<?php endif; ?>
					</div>
                    <p class="h5 text-center text-dark mb-0"><?php echo $data['description'] ?></p>
                    <table class="text-small">
                        <?php foreach ($data['list'] as $i): ?>
                            <tr>
                                <td><?php echo $i['key']; ?></td>
                                <td class="text-right"><?php echo $i['value']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <?php $data = get_field('block_4'); ?>
            <div class="four-cards bg-light">
                <?php foreach ($data['four_cards'] as $item):?>
                    <div class="flex-box four-cards-item">
                        <?php $image = $item['image']; ?>
                        <?php if ($image) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                        <?php endif; ?>
                        <div class="item-desc text-small text-semibold">
                            <p><?php echo $item['description']['key']; ?></p>
                            <span class="text-dark"><?php echo $item['description']['value']; ?></span>
                        </div>
                    </div>
                    <?php $link = $item['button']; ?>
                    <?php if ($link) : ?>
                        <button type="button" class="btn-cas btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
