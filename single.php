<?php get_header(); ?>
  <main>
    <div class="single__item">
      <div class="single__header">
        <?php
        $posttags = get_the_tags();
        if($posttags) {
          foreach($posttags as $tag) {
            echo '<span class="single__tag-name">'. $tag->name . '</span>';
          }
        }
        ?>
        <h2 class="single__ttl"><?php echo the_title(); ?></h2>
        <p class="single__date"><?php echo get_the_date('Y-m-d'); ?></p>
      </div>
      <div class="single__image">
      <?php if(has_post_thumbnail()):?>
        <?php echo the_post_thumbnail(); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri();?>/no-images.png" class="single__img">
      <?php endif; ?>
      </div>
      <div class="single__content">
        <?php echo get_the_content(); ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>