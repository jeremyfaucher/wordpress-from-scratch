<?php
/* The front page template. */
?>
<?php get_header(); ?>
<section class="section--bg home--about">
<div class="container">
<h2>Morbi tristique senectus.</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis risus sed vulputate odio ut enim. Morbi tristique senectus et netus et malesuada fames ac turpis.</p>
<p class="no-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis risus sed vulputate odio ut enim. Morbi tristique senectus et netus et malesuada fames ac turpis.</p>
</div>
</section>
<section>
<div class="container">
<h2 class="section-title">Recent Blog Posts</h2>
<div role="list" class="col-two">
<?php
// Start the loop
$lastposts = get_posts( array(
'posts_per_page' => 4
) );
// foreach loop
if ( $lastposts ) {
foreach ( $lastposts as $post ) :
setup_postdata( $post ); ?>
<?php if (has_post_thumbnail( $post->ID ) ): ?>
<article role="listitem" class="grid">
<?php 
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
$image_id = get_post_thumbnail_id();
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
 ?>
<img src="<?php echo $image ?>" alt="<?php echo $image_alt ?>"/>
<?php endif; ?>
<h3 class="summary--title"><a href="<?php echo get_permalink( $id ); ?>"><h3 class="summary--title"><?php the_title(); ?></h3></a></h3>
<p><?php the_excerpt(); ?></p>
</article>
<?php
endforeach; 
wp_reset_postdata();
} ?>
</div>
</section>
<?php get_footer(); ?>