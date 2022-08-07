<?php
$classname = "additional_questions";
if (!empty($block['className'])) {
    $classname .= ' ' . $block['className'];
}
$data = get_field('questions');
?>
<div class="<?php echo esc_attr($classname) ?>">
	<div class="cas-row">
        <?php foreach ($data as $item) { $question = $item['question_item'] ?>

            <div class="col-3 flex-box">
        		<div class="question-box hovered">
        			<h4 class="h7"><?php echo $question['title']; ?></h4>
        			<p class="text-small mb-0"><?php echo $question['text']; ?></p>
        		</div>
        	</div>

    	<?php } ?>
    </div>
</div>
