<?php get_header()?>
    <section class="single-post container">
        <div class="single-content">
            <?php if(have_posts()){?>
                <?php while(have_posts()):?>
                    <?php the_post()?>
                    <article class="post">
                        <div class="post-header">
                            <h2><?php the_title()?></h2>
                            <small><?php the_date()?> - <?php the_author()?></small>
                        </div>
                        <div class="post-content">
                        <?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail("full")?>
						<?php else:?>
                        <?php endif;?>
                        <?php the_content()?>
                        </div>
                    </article>
                <?php endwhile;?>
            <?php }?>
        </div>
        <div class="single-sidebar">
            <div class="sidebar-widget">
                <?php if(is_active_sidebar("sidebar-1")){?>
                <?php dynamic_sidebar("sidebar-1");?>
                <?php };?>
            </div>
            <div class="sidebar-widget">
                <?php if(is_active_sidebar("sidebar-2")){?>
                <?php dynamic_sidebar("sidebar-2");?>
                <?php };?>
            </div>
            <div class="sidebar-widget">
                <?php if(is_active_sidebar("sidebar-3")){?>
                <?php dynamic_sidebar("sidebar-3");?>
                <?php };?>
            </div>
        </div>
    </section>
<?php get_footer()?>