<!-- pagination -->
<div class="pagination">
    <div class="container">
        <div class="nav-next">
            <?php if(is_single()):?>
            <?php next_post_link('%link', 'Next post') ?>
            <?php else:?>
            <?php next_posts_link("Newer posts") ?>
            <?php endif;?>
        </div>
        <div class="nav-prev">
            <?php if(is_single()):?>
            <?php previous_post_link('%link', 'Prev post') ?>
            <?php else:?>
            <?php previous_posts_link("Older posts") ?>
            <?php endif;?>
        </div>
    </div>
</div>