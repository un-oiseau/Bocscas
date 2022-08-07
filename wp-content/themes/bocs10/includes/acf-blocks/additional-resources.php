<?php
$classname = "additional_resources";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('articles');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<?php foreach ($data as $item) { $article = $item['article'] ?>

		<div class="article-item">
    		<?php $link = $article['link']; ?>
    		<?php if ($link) : ?>
    			<p class="h6"><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></p>
    		<?php endif; ?>
    		<p class="text-middle"><?php echo $article['text']; ?></p>
    	</div>

	<?php } ?>
</div>
