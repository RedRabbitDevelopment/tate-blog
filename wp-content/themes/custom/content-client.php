<?php the_title(); ?>
<?php $logo = get_field('logo'); $screenshot = get_field('screenshot'); ?>
Role: <?php echo get_field('role'); ?>
<img src="<?php echo $logo['thumbnail']; ?>" alt="<?php echo $logo['alt'] ?>" />
<?php the_content(); ?>
<img src="<?php echo $screenshot['url']; ?>" alt="<?php echo $screenshot['alt'] ?>" />
