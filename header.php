<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/site.css"></style>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
      <header>
        <div>
          
          <h1>Agence Matrice Carrée <code>bloginfo('name')</code> : <?php bloginfo( 'name' ); ?></h1>
          <h2> Matrice Carrée, c'est carrée.<code>bloginfo('description')</code> : <?php bloginfo( 'description' ); ?></h2>
          <nav id="menuprincipal">
          <div id="legendemenuprincipal">Menu principal <code>wp_page_menu('show_home=1'):</code></div>
            <?php wp_page_menu('show_home=1'); ?>
          </nav>
        </div>
      </header>
  </html>
