<div class="my-face">
  <img class="alignleft wp-image-4" src="http://www.nathantate.io/wp-content/uploads/2014/10/me.jpg" alt="me" width="377" height="305" />
  <span class="social-icons">
    <a href="https://www.facebook.com/YourDeveloperFriend" target="_blank"><i class="fa fa-facebook-square"></i></a><br/>
    <a href="http://www.linkedin.com/pub/nathan-tate/26/b3b/2a9/" target="_blank"><i class="fa fa-linkedin-square" target="_blank"></i></a>
    <a href="https://twitter.com/yourdevfriend" target="_blank"><i class="fa fa-twitter-square" target="_blank"></i></a>
  </span>
</div>
<div class="my-description">
  <h2>My Name is Nathan</h2>
  <p class="description">:%s/(programmer|web) developer/entrepreneur/g</p>
  <div class="recommendations">
    <ul class="recommendations-container">
      <?php
      $recommendations = get_posts(array(
        'post_type' => 'recommendation'
      ));
      add_filter('the_content', 'quote');
      global $post;
      foreach($recommendations as $recommendation):
      $post = $recommendation;
      setup_postdata($recommendation);
      ?>
      <li class="recommendation">
        <?php the_content(); ?><br/>
        -- <?php the_field('speaker'); ?> (<?php the_field('speakers_role'); ?>)
      </li>
      <?php
      endforeach; 
      wp_reset_postdata();
      remove_filter('the_content', 'quote');
      ?>
    </ul>
    <ul class="circles">
      <li class="circle"></li>
    </li>
  </div>
  <script type="text/javascript">
    var Slider = function() { this.initialize.apply(this, arguments) }
    Slider.prototype = {
 
      initialize: function(slider) {
        this.slider = slider;
        this.ul = slider.children[0]
        this.circles = slider.children[1];
        this.li = this.ul.children
 
        // make <ul> as large as all <li>’s
        this.ul.style.width = (this.li[0].clientWidth * this.li.length) + 'px'
        this.ul.style.left = "0";
 
        this.currentIndex = 0;
        this.addClass(this.circles.children[this.currentIndex]);
      },
 
      goTo: function(index) {
        // filter invalid indices
        if (index > this.li.length - 1)
          index = 0;
        if (index < 0 || index > this.li.length - 1)
          return
 
        // move <ul> left
        this.ul.style.left = '-' + (100 * index) + '%'
 
        this.removeClass(this.circles.children[this.currentIndex]);
        this.currentIndex = index
        this.addClass(this.circles.children[this.currentIndex]);
      },
 
      addClass: function(node) {
        var classes = node.className.split(' ');
        var index = classes.indexOf('active');
        if(-1 !== index)
          node.className += ' active';
      },
 
      removeClass: function(node) {
        var classes = node.className.split(' ');
        var index = classes.indexOf('active');
        if(-1 !== index)
          classes.splice(index, 1);
        node.className = classes.join(' ');
      },

      goToPrev: function() {
        this.goTo(this.currentIndex - 1)
      },
 
      goToNext: function() {
        this.goTo(this.currentIndex + 1)
      }
    }
    window.slider = new Slider(document.querySelector('.recommendations'));
    </script>
</div>
<div class="front-page-clients">
  <h2>Check out my Past Work</h>
</div>
<div class="front-page-clients">
  <h2>Blog Posts</h>
</div>
