<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/home.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sections/instagram-feed.css">
<!-- start of intro -->
<section class="pb-5 bg-dark intro position-relative text-white">
<?php echo wp_get_attachment_image(43,'full','',['class'=>'w-100 h-100 bg-img position-absolute']); ?>
<div class="container">
<div class="row">
<!-- start of links -->
<?php 
$counterIntro=0;
if(have_rows('links')): while(have_rows('links')): the_row();
$counterIntro++;
$link = get_sub_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
 ?>
<div class="col-md-4 col-intro-links" data-aos="fade-up" data-aos-delay="<?php echo $counterIntro; ?>00">
    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target; ?>">
        <?php $linksImage = get_sub_field('background_image'); echo wp_get_attachment_image($linksImage['id'],'full','',['class'=>'w-100']); ?>
        <h3 class="position-absolute w-100 text-center text-white"><?php the_sub_field('title'); ?></h3>
    </a>
</div>
<?php endwhile; else : endif; ?>
<!-- end of links -->


</div>
</div>
<div class="container pt-5">
<div class="row align-items-center">
<div class="col-md-6" data-aos="fade-up">
<?php $signUpBtn = get_field('sign_up_button'); ?>
<div class="accent-btn <?php echo $signUpBtn['classes']; ?>">
<?php echo wp_get_attachment_image(51,'full','',['class'=>'w-100']); ?>
<h3 class="position-absolute w-100 text-center text-white"><?php echo $signUpBtn['title']; ?></h3>
</div>
</div>
<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
<p class="mb-0"><?php the_field('intro_content'); ?></p>
</div>
</div>
</div>
</section>
<div class="top-bar bg-accent text-center pt-2 pb-2 text-gray" style="height:8px;"></div>
<!-- end of intro -->
<!-- start of best sellers -->
<section>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-4 text-center bg-accent-2" style="clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);">
<h3 class="pt-3 pb-3 mb-0"><?php the_field('best_sellers_title'); ?></h3>
</div>
<div class="col-md-9 pt-4">
<?php the_field('best_sellers_content'); ?>
</div>
<div class="col-md-12 best-seller-products owl-carousel owl-theme pt-5 pb-5">
<?php
$counterBestSellers=0;
$homepageProducts = new WP_Query(array(
'posts_per_page' => -1,
'post_type'=>'product',
'meta_key'=>'total_sales',
'orderby'=>'meta_value_num'
));
while($homepageProducts->have_posts()){
$counterBestSellers++;
$homepageProducts->the_post(); ?>
<div class="col-best-seller-product text-center" data-aos="fade-up" data-aos-delay="<?php echo $counterBestSellers; ?>00">
<div class="content position-relative">
<?php the_post_thumbnail('full',array('class'=>'img-product')); ?>
<h3 class="h5 text-gray"><?php the_title(); ?></h3>
<div class="stars" style="color:#ddaf6c;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
<span class=""><strong><?php echo $product->get_price_html(); ?></strong></span>
<div><a href="<?php the_permalink(); ?>?add-to-cart=<?php echo get_the_ID(); ?>" class="btn bg-black text-gray-light mt-3" style="font-size:1.5rem;">Add to Cart</a></div>
</div>
</div>
<?php } wp_reset_postdata(); ?>
</div>
</div>
</div>
</section>
<!-- end of best sellers -->

<!-- start of content area -->
<section class="content-area">
<div class="container-fluid">
<!-- start of repeater -->
<?php if(have_rows('rows')): while(have_rows('rows')): the_row(); ?>
<div class="row">
<div class="col-md-6 p-0">
    <div>
<?php $rowsImage = get_sub_field('image'); echo wp_get_attachment_image($rowsImage['id'],'full','',['class'=>'w-100 h-100 img-content-area']); ?>
</div>
</div>
<div class="col-md-6 overflow-h p-0">
<?php echo wp_get_attachment_image(43,'full','',['class'=>'w-100 h-100 position-absolute bg-img']); ?>
<div class="top-content position-relative p-5" style="background:rgba(0,0,0,.35);">
<div class="text-left text-golden" data-aos="fade-up"><h3 style="letter-spacing:0.3em;"><?php the_sub_field('title_top'); ?></h3></div>
<div class="text-center" data-aos="fade-up" data-aos-delay="200"><h2 style="letter-spacing:0.3em;" class="text-white h1"><?php the_sub_field('title'); ?></h2></div>
<div class="text-right text-golden" data-aos="fade-up" data-aos-delay="400"><h3 style="letter-spacing:0.3em;"><?php the_sub_field('title_bottom'); ?></h3></div>
</div>
<div class="">
<div class="row w-100 m-0" data-aos="fade-up" data-aos-delay="600">
<div class="col-12 text-white middle-content position-relative mt-5 mb-5 p-4" style="font-size:120%;">
<?php the_sub_field('content'); ?>
</div>
</div>
</div>

</div>
</div>
<?php endwhile; else : endif; ?>
<!-- end of repeater -->


</div>
</section>
<!-- end of content area -->

<!-- start of product categories -->
<section class="pt-5 pb-5 mb-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-12 text-center pt-5">
<h2 class="h1 thin"><?php the_field('product_categories_title'); ?></h2>
</div>
<div class="col-md-9 pt-4">
<?php the_field('product_categories_content'); ?>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row justify-content-center">

<?php


if(have_rows('product_categories_list')): 
    $counterProductCategoriesLink = 0;
    while(have_rows('product_categories_list')): the_row();
    $counterProductCategoriesLink++;
$img = get_sub_field('background_image');
$link = get_sub_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
$sectionID = sanitize_title_with_dashes($link_title);

echo '<div class="col-lg-4 col-md-6 mt-5 mb-5 col-product-category text-center" style="height:600px;" id="' . $sectionID . '" data-aos="fade-up" data-aos-delay="' . $counterProductCategoriesLink . '00">';
echo '<a href="' . $link_url . '" class="text-white">';
echo wp_get_attachment_image($img['id'],'full','',['class'=>'img-product-category w-100 h-100','style'=>'object-fit:cover;']);
echo '<div class="tint-overlay position-absolute"></div>';
// echo '<div class="tint-overlay-border position-absolute"></div>';
echo '<div class="position-absolute w-100 text-center content-product-category">';
echo '<h4 class="text-shadow" style="font-size:3rem;">' . $link_title . '</h4>';
echo '</div>';
echo '</a>';
echo '<a href="' . $link_url . '" class="btn bg-black btn-large text-white mt-md-5 mt-3 pl-md-5 pl-4 pr-md-5 pr-4" style="font-size:1.5rem;">Shop Now</a>';
echo '</div>';

endwhile; endif;


// $counterProductCategories=0;
// $categories = get_categories( array(
//     'taxonomy' => 'product_cat'
// ) );
 
// foreach( $categories as $category ) {
// $counterProductCategories++;
// $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
// $image = wp_get_attachment_url( $thumbnail_id );
// $image1 = wp_get_attachment_image( $thumbnail_id,'full','',['class'=>'w-100 h-100 img-product-category'] );
// // echo $image;


// echo '<div class="col-md-4 col-6 mt-5 mb-5 col-product-category text-center" id="' . $SectionID = $category->name sanitize_title_with_dashes($SectionID) . '" data-aos="fade-up" data-aos-delay="' . $counterProductCategories . '>00">';
// echo '<a href="' . get_category_link( $category->term_id ) . '" class="text-white">';
// echo $image1;
// echo '<div class="tint-overlay position-absolute"></div>';
// echo '<div class="tint-overlay-border position-absolute"></div>';
// echo '<div class="position-absolute w-100 text-center content-product-category">';
// echo '<h4 class="text-shadow">' . $category->name . '</h4>';
// echo '</div>';
// echo '</a>';
// echo '<a href="' . get_category_link( $category->term_id ) . '" class="btn bg-black btn-large text-white mt-md-5 mt-3 pl-md-5 pl-4 pr-md-5 pr-4" style="font-size:1.5rem;">Shop Now</a>';
// echo '</div>';

// } 

?>
</div>
</div>
</section>
<!-- end of product categories -->

<!-- start of big video -->
<div style="background:#959595;height:15px;"></div>
<section class="pt-5 pb-5 bg-dark video position-relative">
<div class="position-absolute bg-white"></div>
<div class="position-absolute overlay"></div>
<div class="container pt-4 pb-4">
<div class="row">
<div class="col-md-12">
<?php $fuelImage = get_field('fuel_for_the_backcountry_background_image'); echo wp_get_attachment_image($fuelImage['id'],'full','',['class'=>'w-100 h-100']); ?>
<div class="position-absolute content text-center">
<!-- <?php echo get_template_part('partials/play-icon'); ?> -->
<h3 class="mt-4 text-white text-shadow h1" data-aos="fade-up" data-aos-delay=""><?php the_field('fuel_for_the_backcountry_title'); ?></h3>
<p class="mb-0 text-white text-shadow h3" data-aos="fade-up" data-aos-delay="150"><?php the_field('fuel_for_the_backcountry_content'); ?></p>
<?php $fuelBtn = get_field('fuel_for_the_backcountry_button'); ?>
<a href="<?php echo $fuelBtn['link']['url']; ?>" class="btn btn-lg bg-accent-green pl-5 pr-5 mt-5 text-white rounded btn-backcountry-fuel <?php echo $fuelBtn['class']; ?>" style="font-size:1.5rem;" data-aos="fade-up" data-aos-delay="300"><?php echo $fuelBtn['label']; ?></a>
</div>
</div>
</div>
</div>
</section>
<!-- end of big video -->

<!-- start of lifestyle -->
<!-- <section class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="h1 thin"><?php the_field('lifestyle_title'); ?></h3>
            </div>
            <div class="col-md-9 pt-4">
<?php the_field('lifestyle_content'); ?>
</div>
        </div>
    </div>
    <div class="container-fluid">

<div id="output" class="row"></div>



<script>
fetch('https://graph.facebook.com/v9.0/17841401579106687/media?fields=media_type,media_url,thumbnail_url,permalink,like_count,comments_count&access_token=EAAJ1Ga2q5u0BAKA8ssWGdWRsTa2jLv61yZA8vjSa4dLTAKmT4s7JjCNFSnTGizE6ZAzlkkytxE6qDhCoyJ4EEF2K1T9xnx6aHXpMs9X6be5GtD68PvuHhr4pN8sF81P9scaCp3I7hUt1PK3Fg6xGNBO9zEFPjRRMzBGdaA5QZDZD')
.then((res) => res.json())
//   .then((data) => console.log(data));
.then((data) => {
let output = '';
data.data.slice(0,6).forEach(function(media){
if(( media.media_type === "CAROUSEL_ALBUM" ) || ( media.media_type === "IMAGE" )) {
output += `
<div class="col-md-4 col-6 col-i-g-feed mt-2 mb-2">
<div class="content position-relative">
<a href="${media.permalink}" target="_blank">
<img src="${media.media_url}" alt="" width="100%" height="auto" style="object-fit:cover;">

<div class="overlay position-absolute"></div>
<div class="mouseover-overlay position-absolute">
<span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/></svg> ${media.like_count}</span>
<span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"/></svg> ${media.comments_count}</span>
</div>
</a>
</div>
</div>
`;
} else if (media.media_type === "VIDEO") {
output +=`
<div class="col-md-4 col-6 col-i-g-feed mt-2 mb-2">
<div class="content position-relative">
<a href="${media.permalink}" target="_blank">
<img src="${media.thumbnail_url}" alt="" width="100%" height="auto" style="object-fit:cover;">

<div class="overlay position-absolute"></div>
<div class="mouseover-overlay position-absolute">
<span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/></svg> ${media.like_count}</span>
<span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32z"/></svg> ${media.comments_count}</span>
</div>
</a>
</div>
</div>
`;
}
});
document.querySelector('#output').innerHTML = output;
});


</script>
</div>
</section> -->
<!-- end of lifestyle -->

<!-- start of limited time only -->
<!-- <section class="pt-5 position-relative limited-time-only">
<?php $limitedImage = get_field('limited_time_only_background_image'); echo wp_get_attachment_image($limitedImage['id'],'full','',['class'=>'w-100']); ?>
<div class="position-absolute content w-100 text-center pt-3 pb-3">
<h3 class="text-accent bold h1" data-aos="fade-up"><?php the_field('limited_time_only_title'); ?></h3>
<h3 class="text-white bold h1" data-aos="fade-up" data-aos-delay="150"><?php the_field('limited_time_only_subtitle'); ?></h3>
<div data-aos="fade-up" data-aos-delay="300">
<?php if(get_field('limited_time_only_content')) { the_field('limited_time_only_content'); } ?>
</div>
<?php $limitedBtn = get_field('limited_time_only_button'); ?>
<a href="<?php echo $limitedBtn['link']['url']; ?>" class="btn btn-lg bg-accent-green pl-5 pr-5 text-white mt-3 rounded <?php echo $limitedBtn['classes']; ?>" style="font-size:1.5rem;" data-aos="fade-up" data-aos-delay="450"><?php echo $limitedBtn['label']; ?></a>
</div>
</section> -->
<!-- end of limited time only -->

<?php get_footer(); ?>