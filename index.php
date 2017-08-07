<?php get_header(); ?>
<?php if ( have_posts() ) : ?>

    <!-- Add the pagination functions here. -->

    <!-- Start of the main loop. -->
	<?php while ( have_posts() ) : the_post(); ?>
        <article>
            <div class="featured">
				<?php the_post_thumbnail(); ?>
            </div>
            <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="meta">
				<?= __( 'Author', 'yast' ); ?>: <strong><?php the_author(); ?></strong> | <?= __( 'Date', 'yast' ); ?>:
                <strong><?php the_date(); ?></strong>
            </div>
            <div>
				<?php the_excerpt(); ?>
            </div>
            <div>
                <a href="<?php the_permalink(); ?>">Show More</a>
            </div>
        </article>
	<?php endwhile; ?>
    <!-- End of the main loop -->

    <!-- Add the pagination functions here. -->

    <div class="nav-previous"><?php next_posts_link( '<i class="fa fa-chevron-left" aria-hidden="true"></i>' ); ?></div>
    <div class="nav-next"><?php previous_posts_link( '<i class="fa fa-chevron-right" aria-hidden="true"></i>' ); ?></div>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>