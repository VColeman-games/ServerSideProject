<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    /*<title><?php page_title(); ?> | <?php site_name(); ?></title>*/
    <link href="/template/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <?php nav_menu(); ?>
    </div>
  </div>
</nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>
</div>
</body>
</html>