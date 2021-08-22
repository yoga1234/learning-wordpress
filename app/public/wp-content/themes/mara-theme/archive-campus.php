<?php
get_header();

pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several conveniently located campuses.'
));
?>

<div class="container container--narrow page-section">
  <ul class="link-list min-list">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <p><?php the_field('map_location'); ?></p>
      </li>
    <?php
    }
    ?>
  </ul>
</div>

<?php
get_footer();
?>