<?php
/**
 * Template name: Home page
 */

get_header();
?>

<div class="container">
  <h1 class="main_title">Home page</h1>

<?php
//services
$args = array(
  'post_type' => 'services',
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) { ?>
  <h2>Services</h2>
  <div class="customLink__inner">
    <?php while ( $query->have_posts() ) {
      $query->the_post(); ?>

      <div class="customLink__item">
        <div class="customLink__picture">
          <?php echo get_the_post_thumbnail() ?>
        </div>
        <div class="customLink__title">
          <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
        </div>
        <div class="customLink__excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>

      <?php
    } ?>
  </div>
<?php } else {
}
wp_reset_postdata();

//portfolio
$args = array(
  'post_type' => 'portfolio',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) { ?>
  <h2>Portfolio</h2>
  <div class="portfolio__inner">
    <?php while ( $query->have_posts() ) {
      $query->the_post(); ?>

      <div class="portfolio__item">
        <a href="<?php echo esc_url(get_field('portfolio_link')); ?>" target="_blank">
          <div class="portfolio__picture">
            <?php echo get_the_post_thumbnail() ?>
          </div>
          <div class="portfolio__excerpt">
            <?php
            echo wp_trim_words(get_the_content(), 7, '...'); ?>
          </div>
        </a>
      </div>

      <?php
    } ?>
  </div>
<?php } else {
}
wp_reset_postdata();

//reviews
$args = array(
  'post_type' => 'review',

);
$query = new WP_Query( $args );
if ( $query->have_posts() ) { ?>
  <div class="reviews__inner" id="reviews__inner">
    <?php while ( $query->have_posts() ) {
      $query->the_post(); ?>

      <div class="reviews__item">
          <div class="reviews__picture">
            <?php echo get_the_post_thumbnail() ?>
          </div>
          <div class="reviews__content">
            <?php
            the_content() ?>
            <div class="reviews__social">
              <?php
              if(get_field('facebook')) { ?>
                <a class="social__item" href="<?php echo esc_url(get_field('facebook')) ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/facebook.png" alt="">
                </a>
              <?php } ?>
              <?php
              if(get_field('instagram')) { ?>
                <a class="social__item" href="<?php echo esc_url(get_field('instagram')) ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/instagram.png" alt="">
                </a>
              <?php } ?>
              <?php
              if(get_field('twitter')) { ?>
                <a class="social__item" href="<?php echo esc_url(get_field('twitter')) ?>" target="_blank">
                  <img src="<?php echo get_template_directory_uri() ?>/img/twitter.png" alt="">
                </a>
              <?php } ?>
            </div>
          </div>
      </div>

      <?php
    } ?>
  </div>
<?php } else {
}
wp_reset_postdata();

?>

</div>

<?php
get_footer();
