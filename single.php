<?php get_header(); ?>
<?php
// Start the Loop.
while ( have_posts() ) : the_post(); ?>
    <article>
        <div class="featured">
			<?php the_post_thumbnail(); ?>
        </div>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="meta">
			<?= __( 'Author', 'yast' ); ?>: <strong><?php the_author(); ?></strong> | <?= __( 'Date', 'yast' ); ?>:
            <strong><?php the_date(); ?></strong>
        </div>
        <div>
			<?php the_content(); ?>
        </div>
    </article>
	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
?>
<?php get_footer(); ?>
