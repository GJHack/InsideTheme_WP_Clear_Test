<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php inside_schema_type(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
  </head>
  <body class = "body"
    <?php body_class(); ?>>
    <?php wp_body_open(); ?>

  <div id="wrapper" class="hfeed">
    <header id="header" class = "mainHeaderContainer" role="banner">
      <div id="branding">
        <div id="site-title" itemprop="publisher">
      <?php
        // Кастомный логотип
        if(has_custom_logo()) {
           the_custom_logo();
        } else {
           bloginfo('name');
        }
      ?>
      </div>
        <!-- ОПИСАНИЕ САЙТ ПОКА ЗАКОММЕНТИЛ
          <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
        -->
      </div>
      <nav id="menu" class = "headerMenu" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        <div id="search">
        <?php
          //get_search_form();
        ?></div>
      </nav>
      <div class = "headerWidgetRight">
        <?php dynamic_sidebar( 'header_rwidget' ); ?>
      </div>

    </header>
  <div id="container" class = "mainContentContainer">
    <main id="content" role="main">
