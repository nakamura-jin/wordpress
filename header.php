<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('UTF-8'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="header__logo">
      <a href="<?php echo get_home_url('/'); ?>"><img src="http://localhost/wp03/wp-content/uploads/2021/03/estramedia__logo.png" alt="サイトロゴ"></a>
    </div>
    <nav class="header__nav">
      <ul class="header__list">
        <li><a href="<?php echo get_category_link(2); ?>">HTML</a></li>
        <li><a href="<?php echo get_category_link(3); ?>">CSS</a></li>
        <li><a href="<?php echo get_category_link(4); ?>">JavaScript</a></li>
        <li><a href="<?php echo get_category_link(5); ?>">PHP</a></li>
        <li><a href="<?php echo get_category_link(6); ?>">MySQL</a></li>
      </ul>
    </nav>
  </header>