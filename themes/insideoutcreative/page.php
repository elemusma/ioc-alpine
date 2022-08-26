<?php
get_header();
// start of child pages of services
global $post;
if (in_array($post->post_parent, [23,25,97], true)) { ?>
<style>
@import url('/wp-content/themes/insideoutcreative/css/sections/products-single.css');
@import url('/wp-content/themes/insideoutcreative/css/sections/intro.css');
</style>
<script>
</script>
<?php if ( $post->post_parent ) { ?>
<section><a href="<?php echo get_permalink( $post->post_parent ); ?>" class="btn btn-primary position-fixed text-uppercase h1 btn-go-back">Go Back to <?php echo get_the_title( $post->post_parent ); ?></a></section>
<?php } ?>
<section class="about-section pt-5 pb-5 position-relative bg-accent texture-bg">
<div class="background-image"></div>
<div class="container pt-5 mb-5">
<div class="row pb-5 mb-5">
<div class="col-md-5 img--main">
<?php $image = get_field('main_image'); ?>
<?php echo wp_get_attachment_image($image['id'],'full',"",['class'=>'w-100 h-100']); ?>
</div>
<div class="col-lg-6 col-md-6 sm-text-center about"> 
<div class="about-first-half">
<div class="about-before"></div>
<div class="about-middle"></div>
</div>
<div class="about-after"></div>
<div class="about-details pt-5 pl-4 pr-4">
<div class="page details">
<!-- <h4 class="bodoni">Best in Denver</h4> -->
<h5 class=""><?php the_field('main_title'); ?></h5>
</div>
<!-- <h6><em>High tech, intelligent and cutting edge.</em></h6> -->
<?php the_field('description'); ?>
</div>
</div>
</div>
</div>
</section>
<!-- start of repeater field section -->
<?php  if( have_rows('content') ):
$bgImage = get_field('background_image'); ?>
<section class="pt-5 pb-5" style="background:url('<?php echo $bgImage['url']; ?>');background-size:cover;">
<div class="pt-5 pb-5">
<div class="container" style="border-top: 40px solid #557426;border-bottom: 40px solid #557426;">
<?php while ( have_rows('content') ) : the_row(); ?>
<div class="row align-items-center services-content-row position-relative">
<div class="col-md-6 services-content-text">
<div class="inner-content p-5">
<h3><?php the_sub_field('title'); ?></h3>
<?php the_sub_field('content'); ?>
</div>
</div>
<div class="col-md-6 p-0 services-content-img">
<div class="">
<?php $contentImage = get_sub_field('image');
echo wp_get_attachment_image($contentImage['id'], 'full', "",['class'=>'w-100 h-100']); ?>
</div>
</div>
</div>
<?php endwhile; ?>
</div>
</div>
</section>
<?php endif; ?>
<!-- end of repeater field section -->
<?php }
// end of child pages of services ?>


<!-- <?php if(is_page(23)){
get_template_part('partials/services'); 
} ?> -->
<?php 
if(!is_page(23) && (!$post->post_parent == 23) && (!$post->post_parent == 25) && (!$post->post_parent == 97)){
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-md-12">
<?php the_content(); ?>
</div>
</div>
</div>
</section>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>

<?php endif; 
}?>
<?php get_footer(); ?>