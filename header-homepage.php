<!DOCTYPE html>
<html>
<body class="home blog unknown">
<input type="hidden" name="global_master_color" value=""><!--[if lt IE 8]>
<div class="alert alert-warning">
    You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
    browser</a> to improve your experience.
</div>
<![endif]-->
<nav id="global-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-hide" href="<?php get_home_url(); ?>">Norse</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
        <?php
        wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
        ) );
        ?>
    </div><!-- /.navbar-collapse -->
</nav>


<head><title><?php the_title();?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
          content="MRTI, Machine Readable Threat Intelligence, Internet Security, dark intelligence, Web Security, Blacklist, Threat Intelligence, Anti-Fraud, Cyber Threats, Norse, Corporation, Corp, Intelligence">
    <meta name="description"
          content="Norse offers proactive security solutions, based on our global &quot;dark intelligence&quot; platform, to defend against today's advanced threats.">
    <link rel="shortcut icon" href="wp-content/themes/norse/favicon.ico">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" id="google-fonts-css"
          href="http://fonts.googleapis.com/css?family=Oswald:400,700,300%7COpen+Sans:400,300,700" type="text/css"
          media="all">
    <link rel="stylesheet" id="font-awesome-css"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="bigmug-icons-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bigmugfont.css" type="text/css"
          media="all">
    <link rel="stylesheet" id="bootstrap-css-css"
          href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.mind617.css?ver=3.3.2" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-theme-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap-theme.min.css"
          type="text/css" media="all">
    <link rel="stylesheet" id="norse-typography-css"
          href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/norse-typography2f3e.css?ver=1.12" type="text/css" media="all">
    <link rel="stylesheet" id="norse-layout-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/norse-layout7291.css?ver=1.37"
          type="text/css" media="all">
    <link rel="stylesheet" id="norse-home-css-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/home-page03b7.css?ver=1.43"
          type="text/css" media="all">
    <link rel="stylesheet" id="jquery-ui-css-css"
          href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" type="text/css"
          media="all">
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery/jqueryc1d8.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery/jquery-migrate.min1576.js?ver=1.2.1"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/readyLoad.js"></script>
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <link rel="https://api.w.org/" href="<?php echo esc_url( get_template_directory_uri() ); ?>/wp-json/index.html">
</head>
<script>
    $(document).ready(function () {
        var mainNav=$('.menu-main-container');
        var htmlNav=mainNav.html();
        mainNav.replaceWith(htmlNav);
        $('#menu-main').children('li').each(function () {
            $(this).removeClass('current_page_item');
            $(this).removeClass('current-menu-item page_item');
            if($(this).hasClass('menu-item-has-children')){
                $(this).children('a').append('<b class="caret"></b>');

            }
        });
        $('.sub-menu').hide();
        $('.menu-item-has-children').on('click',function () {
            $(this).children('.sub-menu').addClass('dropdown-menu depth_0');
        });
    });
</script>

