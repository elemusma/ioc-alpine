<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php } 

wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="position-relative">
<div class="top-bar bg-accent text-center pt-1 pb-1 text-gray"><?php the_field('website_message','options'); ?></div>
<div class="nav pt-2 pb-2 position-relative">
<?php echo wp_get_attachment_image(43,'full','',['class'=>'w-100 h-100 bg-img position-absolute']); ?>
<div class="container">
<div class="row">
<div class="col-12 text-center">
<?php wp_nav_menu(array(
'menu' => 'eCommerce Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
</div>
</div>
<div class="row align-items-center">
<div class="col-md-5 p-0 left-menu">
<?php wp_nav_menu(array(
'menu' => 'Left Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0'
)); ?>
</div>
<div class="col-lg-2 col-4 text-center">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); ?>
<?php echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'logo h-auto','style'=>'width:100px;']); ?>
</a>

</div>
<div class="col-md-5 col-6 p-0 d-flex flex-wrap align-items-center justify-content-between">
<div class="right-menu">
<?php wp_nav_menu(array(
'menu' => 'Right Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-start mb-0'
)); ?>
</div>
<div class="si pl-md-0 pl-3">
<?php if(have_rows('social_icons','options')): while(have_rows('social_icons','options')): the_row(); 
$socialLink = get_sub_field('link');
?>
<a href="<?php echo $socialLink['url']; ?>" target="<?php echo $socialLink['target'] ? $socialLink['target'] : '_self'; ?>">
<?php $socialIcon = get_sub_field('image'); echo wp_get_attachment_image($socialIcon['id'],'full','',['class'=>'img-si']); ?>
</a>
<?php endwhile; else : endif; ?>
</div>
	<a id="navToggle" class="nav-toggle">
<div>
<div class="line-1"></div>
<div class="line-2"></div>
<div class="line-3"></div>
</div>
</a>
</div>
<div class="col-md-12 nav-items p-0" id="navItems">
<div class="bg-accent" id="menu-main-menu">
<?php wp_nav_menu(array(
'menu' => 'Left Menu',
'menu_class'=>'menu list-unstyled mb-0'
)); ?>
<?php wp_nav_menu(array(
'menu' => 'Right Menu',
'menu_class'=>'menu list-unstyled mb-0'
)); ?>
</div>
</div>
</div>
</div>
</div>
<div class="top-bar bg-accent text-center text-gray" style="height:15px;"></div>
</header>
<?php if(is_page()){ ?>
<section class="hero position-relative text-center overflow-h bg-dark pb-lg-4 pb-5">
<?php if(has_post_thumbnail()){
the_post_thumbnail('full',array('class'=>'w-75 h-auto'));
} else {
echo wp_get_attachment_image(45,'full','',['class'=>'w-75 h-auto']);
}
//end of has_post_thumbnail ?>
<div class="hero-overlay position-absolute"></div>
<div class="hero-content position-absolute w-100">
<?php if(is_front_page()) {
echo '<h1 class="mb-0 text-shadow text-white">' . get_the_title() . '</h1>';

	if(have_rows('header_content')): while(have_rows('header_content')): the_row();
	echo '<h2 class="text-shadow text-accent">' . get_sub_field('subtitle') . '</h2>';
	endwhile; endif;

} elseif(is_page()){ ?> 
<h1 class="mb-0 h1 text-white"><?php the_title(); ?></h1>
<?php } elseif(is_single()){ ?> 
<h1 class="mb-0 h1 text-white"><?php single_post_title(); ?></h1>
<?php } elseif(is_author()){ ?> 
<h1 class="mb-0 h1 text-white">Author:<br><?php the_author(); ?></h1>
<?php } elseif(is_tag()){ ?> 
<h1 class="mb-0 h1 text-white"><?php single_tag_title(); ?></h1>
<?php } elseif(is_category()){ ?> 
<h1 class="mb-0 h1 text-white"><?php single_cat_title(); ?></h1>
<?php } elseif(is_archive()){ ?> 
<h1 class="mb-0 h1 text-white"><?php the_archive_title(); ?></h1>
<?php } ?>
</div>
<div class="hero-btn position-absolute w-100">
<a href="<?php echo home_url(); ?>/shop/" class="btn bg-black text-white btn-lg pl-5 pr-5" style="font-size:1.75rem;">Shop Now!</a>
</div>
</section>
<?php } elseif(is_archive()) {
// echo wp_get_attachment_image(45,'full','',['class'=>'w-75 h-auto']);
} 
//end of is_page
?>