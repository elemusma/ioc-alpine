<div class="col-md-6 pr-lg-5 col-blog text-white">
<a href="<?php the_permalink(); ?>" class="text-white">
<div class="position-relative overflow-h">
<div class="overlay position-absolute"></div>
<?php the_post_thumbnail('medium',array('class'=>'w-100')); ?>

<div class="position-absolute w-100 blog-content pl-4 pr-4 pb-4">

<h3 class="h4"><?php the_title(); ?></h3>

<hr class="border-white">
<p class=""><?php the_time('F jS, Y'); ?> by <?php echo get_the_author_posts_link(); ?></p>
<!-- <p><?php the_tags('Tags: '); ?> <span>Categories: <?php the_category( ', ', 'multiple', $post->ID); ?></span></p> -->
<a href="<?php the_permalink(); ?>">Read More</a>
</div>
</div> <!-- end of position relative -->
</a>
</div> <!-- end of col -->