<!DOCTYPE html>
<html <?php language_attributes(); ?>
<?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div id="branding">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="http://planty.local/wp-content/uploads/2024/07/Logo-1.png" alt="Home">
                </a>
             </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main">