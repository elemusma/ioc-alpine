<footer>
<section class="pt-5 pb-5 bg-dark">

<div class="bg-gray mt-5">
    <div class="container">
        <div class="row align-items-center pt-2 pb-2">
<div class="col-md-5 p-0">
<?php wp_nav_menu(array(
'menu' => 'Left Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-md-end justify-content-center mb-0'
)); ?>
</div>
<div class="col-md-2 text-center">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); ?>
<?php echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'logo w-75 h-auto']); ?>
</a>
</div>
<div class="col-md-5 p-0 d-md-flex flex-wrap align-items-center justify-content-md-between justify-content-center text-center">
<div class="">
<?php wp_nav_menu(array(
'menu' => 'Right Menu',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-md-start justify-content-center mb-0'
)); ?>
</div>
<div class="si pb-md-0 pb-4">
<?php if(have_rows('social_icons','options')): while(have_rows('social_icons','options')): the_row(); 
$socialLink = get_sub_field('link');
?>
<a href="<?php echo $socialLink['url']; ?>" target="<?php echo $socialLink['target'] ? $socialLink['target'] : '_self'; ?>">
<?php $socialIcon = get_sub_field('image'); echo wp_get_attachment_image($socialIcon['id'],'full','',['class'=>'img-si']); ?>
</a>
<?php endwhile; else : endif; ?>
</div>
</div>
</div>
    </div>
    </div>

    <div class="text-center pt-5 mt-5">
    <a href="https://insideoutcreative.io/" target="_blank" title="Website Development, Design &amp SEO in Colorado - Florida" style="padding-top:35px;">
<img class="auto img-backlink" src="<?php echo home_url(); ?>/wp-content/uploads/2021/01/created-by-inside-out-creative.png" alt="Website Development, Design &amp SEO in Colorado - Florida" width="125px" />
</a>
    </div>
</section>
</footer>
<?php 
if(get_field('footer', 'options')) { the_field('footer', 'options'); }
wp_footer(); ?>
</body>
</html>