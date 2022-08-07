<?php
$classname = "slot-page";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
?>
<div class="<?php echo esc_attr($classname) ?>">
<?php $data = get_field('block_1'); ?>
    <?php $stars = $data['rating']; ?>

    <div class="cas-row">
        <div class="col-9">
            <h1 class="h3 mt-0"><?php echo $data['title']; ?>
                <span class="rate-stars f-right">
                <span class="h4"><?php echo $stars; ?>/5</span>
                    <?php for ($i=0; $i<$stars; $i++) { ?>
                        <span class="star"></span>
                    <?php } ?>
                    <?php for ($i=0; $i<5-$stars; $i++) { ?>
                        <span class="star empty"></span>
                    <?php } ?>
                </span>
            </h1>
        </div>
    </div>

    <div class="cas-row slot-main">
        <div class="col-9">
            <div class="slot-img">
                <?php $image = $data['image']; ?>
                <?php if ($image) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                <?php endif; ?>

                <div class="btn-group">
                    <?php $link = $data['button_1']; ?>
                    <?php if ($link) : ?>
                        <button type="button" class="btn-cas" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    <?php endif; ?>

                    <?php $link = $data['button_2']; ?>
                    <?php if ($link) : ?>
                        <button type="button" class="btn-cas btn-cas-outline" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="col-3">
            <?php $data = get_field('block_2'); ?>
            <?php foreach ($data as $item): $game = $item['casino_card']; ?>
                <div class="slot-game-item">
                    <?php $logo = $game['image']; ?>
    				<div class="game-logo">
    					<?php if ($logo) :  ?>
    						<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
    					<?php endif; ?>
					</div>

    				<div class="game-desc">
    					<div class="text-small list-text">
    						<table class="bg-light">
    							<?php foreach ($game['list'] as $i): ?>
    								<tr>
    									<td><?php echo $i['key']; ?></td>
    									<td class="text-semibold text-dark nowrap"><?php echo $i['value']; ?></td>
    								</tr>
    							<?php endforeach; ?>
    						</table>
    					</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php $data = get_field('block_3'); ?>
    <div class="cas-row">
        <div class="col-9">
            <h3><?php echo $data['title'] ?></h3>
            <?php echo $data['text'] ?>

            <div class="flex-box triple-image">
                <?php $data = get_field('block_4'); ?>
                <?php foreach ($data as $item): $image = $item['image']; ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                <?php endforeach; ?>
            </div>
        </div>

        <?php $data = get_field('block_5'); ?>
        <div class="col-3">
            <div class="four-cards">
                <?php foreach ($data['four_cards'] as $item):?>
                    <div class="flex-box four-cards-item">
                        <?php $image = $item['image']; ?>
                        <?php if ($image) : ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
                        <?php endif; ?>
                        <div class="item-desc text-small text-semibold nowrap">
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
