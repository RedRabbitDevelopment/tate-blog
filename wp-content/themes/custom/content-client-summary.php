<?php $image = get_field('screenshot'); ?>
<div class="client-logo">
  <h1>
    <a href="<?php the_permalink() ?>">
      <?php the_title(); ?>
    </a>
  </h1>
  <a href="<?php the_permalink() ?>">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
  </a>
</div>
