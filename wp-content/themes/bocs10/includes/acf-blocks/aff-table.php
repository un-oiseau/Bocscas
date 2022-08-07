<?php
$classname = "top-games";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$games = get_field('casino');
?>
<div class="<?php echo esc_attr($classname) ?>">
    <div class="cas-item">
        <div class="cas-head h7 text-dark text-center mb-0">
            <div class="cas-row">
                <div class="col-6">
                    <div class="cas-row">
                        <div class="col-3">
                            <span>Casino</span>
                        </div>
                        <div class="col-5">
                            <span>Rating</span>
                        </div>
                        <div class="col-4">
                            <span>Bonus</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cas-row">
                        <div class="col-4">
                            <span>Pros</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php foreach ($games as $item): $data = $item['casino_item']; ?>
        <div class="cas-top-item">
            <div class="cas-row">
                <div class="col-6">
                    <div class="cas-row">
                        <div class="col-3 flex-box">
                            <?php $logo = $data['image']; ?>
                    		<div class="top-game-logo w-100">
                    			<?php if ($logo) :  ?>
                    				<img class="w-100" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
                    			<?php endif; ?>
                    		</div>
                        </div>
                        <div class="col-5 text-center flex-box">
                            <?php $stars = $data['rating']; ?>
                			<div class="rate-stars w-100">
                				<span class="h7 text-dark"><?php echo $stars; ?>/5</span><br>
                				<?php for ($i=0; $i<$stars; $i++) { ?>
                					<span class="star"></span>
                				<?php } ?>
                				<?php for ($i=0; $i<5-$stars; $i++) { ?>
                					<span class="star empty"></span>
                				<?php } ?>

                			</div>
                        </div>
                        <div class="col-4 text-center flex-box">
                            <p class="h7 mb-0 w-100 cas-desc"><?php echo $data['bonus']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cas-row">
                        <div class="col-6">
                            <ul class="checked-list">
                                <?php foreach ($data['pros'] as $p): ?>
                                    <li><?php echo $p['list_item']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-6 flex-box">
                            <?php $link = $data['button_link']; ?>
                			<?php if ($link) : ?>
                				<button type="button" class="btn-cas btn-block" onclick="window.location='<?php echo $link['url']; ?>';"><?php echo $link['title']; ?></button>
                			<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
