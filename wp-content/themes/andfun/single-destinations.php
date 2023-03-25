<?php get_header(); ?>
<div class="container">
    <br><br><br>
    <h1><?php the_title(); ?></h1>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <img src="<?php echo the_field('destination_image');?>" alt="<?php the_title();?>">
    <br><br><br>
    <?php echo the_field('description'); ?>
    <?php endwhile; endif; ?>
</div>
<br><br><br><br><br>
<?php get_footer(); ?>