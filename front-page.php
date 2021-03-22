<?php get_header(); ?>
<main>
  <div class="firstview">
    <h2 class="firstview__eyecatch">Commit to the growth<br>for everyone</h2>
  </div>
  <div class="container">
    <p class="top-news__subttl">new Post</p>
    <h2 class="top-news__ttl">新着記事</h2>
    <div class="flex__item">
      <div class="cards__wrap">
        <div class="cards__contents">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="card__item">
                <div class="card__item__eyecatch">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/no-images.png" class="card__item-image">
                  <?php endif; ?>
                </div>
                <?php $posttags = get_the_tags();
                if ($posttags) {
                  foreach ($posttags as $tag) {
                    echo '<span class="card__item-category--name">' . $tag->name . '</span>';
                  }
                }
                ?>
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