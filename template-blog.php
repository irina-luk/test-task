<?php
/**
 * Template name: Blog page
 */

get_header();
?>

<div class="container">
  <h1 class="main_title">Blog page</h1>

<?php
//post
$args = array(
  'post_type' => 'post',

);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
  $i = 1; ?>
  <div class="blog__inner">
    <?php while ( $query->have_posts() ) {
      $query->the_post(); ?>

      <div class="blog__item">
          <div class="blog__picture">
            <div class="blog__picture-img">
              <?php echo get_the_post_thumbnail() ?>
            </div>
            <div class="blog__picture-number">
              <?php echo $i; ?>
            </div>
          </div>
          <div class="blog__content">
            <?php
            the_excerpt() ?>
          </div>
      </div>

      <?php
      $i++;
    } ?>
  </div>
<?php } else {
}

?>

</div>

<?php
get_footer();
