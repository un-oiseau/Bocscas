<div class="content-links collapse-box">
    <?php if (get_field('title')): ?>
        <p class="h4"><?php echo get_field('title'); ?><span class="toggller"></span></p>
    <?php endif; ?>
    <ul class="collapsed">
        <?php foreach (get_field('headings') as $li) { ?>

            <li><a class="c-link" href="#"><?php echo $li['heading']; ?></a></li>

        <?php } ?>
    </ul>
</div>
