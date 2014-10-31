<article class="content-client">
  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
  </header>
  <?php $logo = get_field('logo'); $screenshot = get_field('screenshot'); ?>
  <div class="screenshot">
    <img src="<?php echo $screenshot['url']; ?>" alt="<?php echo $screenshot['alt'] ?>" />
    <?php the_content(); ?>
  </div>
  <p class="role">
    <span class="strong">Role:</span>
    <?php echo get_field('role'); ?>
  </p>
  <div class="technologies">
    <span class="strong">Technologies:</span>
    <?php echo get_field('technologies'); ?>
  </div>
<?php
  $recommendations = get_posts(array(
    'post_type' => 'recommendation',
    'meta_query' => array(
      array(
        'key' => 'client',
        'value' => get_the_ID()
      )
    )
  ));
if($recommendations):
add_filter('the_content', 'quote');
?>
  <div class="recommendations">
    <h2>Recommendations</h2>
    <?php foreach($recommendations as $recommendation): ?>
    <?php setup_postdata($recommendation); ?>
    <div class="recommendation">
      <?php echo the_content(); ?>
    </div>
    <div class="from">
      -- <?php echo get_field("speaker", $recommendation->ID); ?><br/>
      <?php echo get_field('speakers_role', $recommendation->ID); ?>
    </div>
    <?php wp_reset_postdata($recommendation); ?>
    <?php endforeach; ?>
  </div>
<?php 
remove_filter('the_content', 'quote');
endif; ?>
<?php
  $contributions = get_posts(array(
    'post_type' => 'contribution',
    'meta_query' => array(
      array(
        'key' => 'client',
        'value' => get_the_ID()
      )
    )
  ));
if($contributions):
?>
  <div class="contributions">
    <h2>Contributions</h2>
    <?php foreach($contributions as $contribution): ?>
    <?php $image = get_field('image', $contribution->ID); ?>
    <?php setup_postdata($contribution); ?>
    <div class="contribution">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
      <?php echo the_content(); ?>
    </div>
    <?php wp_reset_postdata($contribution); ?>
    <?php endforeach; ?>
  </div>
<?php 
endif; ?>
</article>
