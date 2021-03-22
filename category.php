<?php get_header(); ?>
<main>
  <div class="category__firstview">
    <h2 class="firstview__eyecatch"><?php single_cat_title(); ?></h2>
  </div>
  <div class="container">
    <div class="flex__item">
      <div class="cards__wrap">
        <div class="cards__contents">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="card__item">
                <div class="card__item__eyecatch">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri();?>/no-images.png" class="card__item-image">
                  <?php endif; ?>
                </div>
                <div class="card__content">
                  <h3 class="card__item-ttl"><?php the_title(); ?></h3>
                  <p class="card__item-date"><?php echo get_the_date('Y-m-d'); ?></p>
                </div>
              </a>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>