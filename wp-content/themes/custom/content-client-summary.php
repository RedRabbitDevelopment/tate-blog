<?php $image = get_field('screenshot'); ?>
<div class="client-logo" style="display: inline-block; width: 300px;">
  <a href="<?php the_permalink() ?>">
    <img style="width: 100%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
  </a>
</div>
