<?php get_header()?>
<header class="main-header">
	<div class="container">
		<h1>Search Result for : <?php echo get_search_query()?></h1>
        <p><?php get_search_form()?></p>
	</div>
</header>

<!-- Start blog posts -->
<section class="blog-posts">
	<div class="container posts-container">
		<?php if(have_posts()):?>
			<?php while(have_posts()):?>
				<?php the_post()?>
					<article class="card">
						<?php if(has_post_thumbnail()): ?>
							<a href="<?php the_permalink()?>"><?php the_post_thumbnail("medium")?></a>
						<?php else:?>
							<a href="<?php the_permalink()?>"><img src="http://placehold.it/300" alt=""></a>
						<?php endif;?>
						<div>
							<h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
							<?php the_excerpt()?>
							<div class="post-catgoreis">
								<?php the_category(" ")?>
							</div>
						</div>
					</article>
			<?php endwhile;?>
		<?php else: ?>
			<?php echo "There are no posts.";?>
		<?php endif;?>
	</div>
	<?php get_template_part('pagination','pagination')?>
</section>
<!-- End blog posts -->

<?php get_footer()?>