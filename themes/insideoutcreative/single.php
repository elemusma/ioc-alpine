<?php get_header(); 
// get_template_part('partials/hero');
?>

<section class="pt-5 pb-5 body">
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12 pr-lg-5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
        </div>
        <?php get_template_part('partials/sidebar'); ?>
    </div>
</div>
</section>


<?php get_footer(); ?>