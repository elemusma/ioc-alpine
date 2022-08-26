<?php 
/**
 * Template Name: About
 */
get_header(); 


// <!-- start of intro -->
if(have_rows('content_repeater')):
echo '<section class="pt-5 pb-5 position-relative bg-accent text-white">';
echo '<div class="container">';

while(have_rows('content_repeater')): the_row();
echo '<div class="row row-repeater align-items-center pt-5 pb-5">';
echo '<div class="col-md-6">';
the_sub_field('content');
echo '</div>';
echo '<div class="col-md-6" style="">';
if(get_sub_field('image')){ 
    $image = get_sub_field('image');
    echo wp_get_attachment_image($image['id'],'full',"",['class'=>'w-100 h-100 box-shadow']); 
} else if(has_post_thumbnail()){
    the_post_thumbnail('full',array('class'=>'w-100 h-100 box-shadow'));
} else { 
    echo wp_get_attachment_image(26,'full',"",['class'=>'w-100 h-100 box-shadow']);
}
echo '</div>';
echo '</div>';
endwhile;

echo '</div>';
echo '</section>';
endif;
// <!-- end of intro -->
?>

<!-- start of first column -->
<!-- <section class="pt-5 pb-5 position-relative d-flex justify-content-center align-items-center full-row" style="background:url('<?php echo wp_get_attachment_image_url(166,'full'); ?>');">

<div class="position-absolute w-100 h-100" style="background:rgba(88,85,86,1);top:0;left:0;opacity:.65;"></div>
<div class="position-absolute w-100 h-100" style="background:linear-gradient(0deg, rgba(88,85,86,1) 0%, rgba(255,255,255,0) 40%, rgba(255,255,255,0) 60%, rgba(88,85,86,1) 100%)"></div>
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-end align-items-center text-white">
<div class="col-md-4">
<h3 class="bold text-shadow" style="font-size:3.5rem;">Advanced Nutrition for Discerning Adventurers</h3>
</div>
<div class="col-md-8">
<div class="inner-content p-5 position-relative">
<div class="overlay position-absolute"></div>
<div class="position-relative">

<p>Our mission is to create the greatest performance freeze dried food in the world. Each meal is the culmination of thousands of hours of brainstorming, cooking, field testing, and fine tuning to create the ultimate in high performance, gourmet, sports nutrition.</p>
<p>Our specialized recipes, advanced freeze dried technology, and innovative packaging are all designed for one purpose; To give you the absolute best experience, physically and mentally in any outdoor pursuit. Don’t just eat and survive with other meals, dine and thrive with Alpine Ranch.</p>
</div>
</div>
</div>
</div>
</div>
</section> -->

<!-- <section class="pt-5 pb-5 position-relative bg-img d-flex justify-content-center align-items-center full-row" style="background:url('<?php echo wp_get_attachment_image_url(167,'full'); ?>');">

<div class="position-absolute w-100 h-100" style="background:rgba(88,85,86,1);top:0;left:0;opacity:.75;"></div>
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-end">
<div class="col-12">
<div class="inner-content text-white p-5 position-relative">
<div class="overlay position-absolute"></div>
<div class="position-relative">
<div class="row">
<div class="col-12 text-right">
<h3 class="bold text-shadow" style="font-size:3.5rem;">Our Beginning</h3>
</div>
<div class="col-md-6">
<p>The vision that has become Alpine Ranch began on a rocky crag in the Idaho backcountry where co-founders Logan Toews and John Barbara were halfway through a 10 day backpacking trek. Sick of practically inedible, low nutrient commercial backpacking food loaded with sodium, preservatives, and fillers, they became obsessed with creating the ultimate backcountry meals. With their backgrounds in nutrition, sports medicine, and the culinary arts they set out to reinvent the concept of freeze dried food by using premium ingredients and combining gourmet cuisine with sports nutrition in complete ultralight meals.</p>
</div>
<div class="col-md-6">
<p>Alpine Ranch is located in Emmett, Idaho along the banks of the Payette River. Here we designed and built our gourmet kitchen to cook small-batch, restaurant quality meals. We then freeze-dry and immediately package the complete meals in house to ensure the utmost quality and consistency. Being a small operation, we have hands-on control over every aspect of the process, from choosing the best organic produce and grass fed bison and heritage pork, to packaging and shipping the final product directly to our customers.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->
<!-- end of first column -->

<!-- start of full height -->
<!-- <?php if(have_rows('slides')) : while(have_rows('slides')): the_row(); ?>
<section class="pt-5 pb-5 position-relative bg-img d-flex justify-content-center align-items-center full-row">
<?php if(get_sub_field('background_image')){ 
$bgImage = get_sub_field('background_image');
echo wp_get_attachment_image($bgImage['id'],'full',"",['class'=>'w-100 h-100 position-absolute bg-img']); ?>
<?php } else if(has_post_thumbnail()){
the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute bg-img'));
} else { ?> 
<?php echo wp_get_attachment_image(26,'full',"",['class'=>'w-100 h-100 position-absolute bg-img']); ?>
<?php } ?>
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="inner-content text-white p-5 position-relative">
<div class="overlay position-absolute"></div>
<div class="position-relative">
<?php the_sub_field('content'); ?>
</div>
</div>
</div>
</div>
</div>
</section>
<?php endwhile; else: endif; ?> -->
<!-- end of full height -->
<?php get_footer(); ?>