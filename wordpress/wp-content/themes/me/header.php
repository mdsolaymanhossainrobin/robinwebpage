<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<meta charset="<?php echo get_option('blog_charset'); ?>">

<!-- Mobile specific meta tag -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Shorcut icon -->
<?php if ( get_option('shortcut_icon') ) : ?>
<link rel="shortcut icon" href="<?php echo get_option('shortcut_icon'); ?>">
<?php endif; ?>
<!-- Touch icon for iPhone and iPod touch  -->
<?php if ( get_option('touch_icon1') ) : ?>
<link rel="apple-touch-icon-precomposed" href="<?php echo get_option('touch_icon1'); ?>">
<?php endif; ?>
<!-- Touch icon for iPad   -->
<?php if ( get_option('touch_icon2') ) : ?>
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_option('touch_icon2'); ?>">
<?php endif; ?>
<!-- Touch icon for high-resolution iPhone and iPod touch  -->
<?php if ( get_option('touch_icon3') ) : ?>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_option('touch_icon3'); ?>">
<?php endif; ?>
<!-- Touch icon for high-resolution iPad  -->
<?php if ( get_option('touch_icon4') ) : ?>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_option('touch_icon4'); ?>">
<?php endif; ?>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Fjord+One|Droid+Sans' rel='stylesheet' type='text/css'>
<?php if (get_option('heading_font')) : ?>
<link href="http://fonts.googleapis.com/css?family=<?php echo get_option('heading_font'); ?>" rel='stylesheet' type="text/css">
<?php endif; ?>
<?php if (get_option('body_font')) : ?>
<link href="http://fonts.googleapis.com/css?family=<?php echo get_option('body_font'); ?>" rel='stylesheet' type="text/css">
<?php endif; ?>
<?php if ( get_option('intro_font') && get_option('intro_font') != "inherited" ) : ?>
<link href="http://fonts.googleapis.com/css?family=<?php echo get_option('intro_font'); ?>" rel='stylesheet' type="text/css">
<?php endif; ?>
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/settings.css" />
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie8.css" />
<![endif]-->
<style type="text/css">
<?php if ( get_option('menu_font_size') ) : ?>
ul.menu li { font-size: <?php echo get_option('menu_font_size'); ?>; }
<?php endif; ?>
<?php if ( get_option('menu_font_color') ) : ?>
ul.menu li a { color: <?php echo get_option('menu_font_color'); ?>; }
<?php endif; ?>
<?php if ( get_option('hidden_menu_background') ) : ?>
div#hidden_menu { background: <?php echo get_option('hidden_menu_background'); ?>; }
<?php endif; ?>
<?php if ( get_option("hidden_menu_color") ) : ?>
div#hidden_items ul li a { color: <?php echo get_option("hidden_menu_color"); ?>; }
<?php endif; ?>
<?php if ( get_option('background_color') ) : ?>
body, div.title h2 span { background: <?php echo get_option('background_color'); ?>; }
ul.menu li ul.sub-menu { background: <?php echo get_option('background_color'); ?>; }
.single_title h3 span { background: <?php echo get_option('background_color'); ?>; }
<?php endif; ?>
<?php if ( get_option('body_font') ) : ?>
body { font-family: <?php echo get_option('body_font'); ?>; }
<?php endif; ?>
<?php if ( get_option('body_font_size') ) : ?>
body { font-size: <?php echo get_option('body_font_size'); ?>; }
<?php endif; ?>
<?php if ( get_option('body_font_color') ) : ?>
body, .post_teaser a.more-link, .image_description, div.sidebar_widget ul li a, .single_meta ul li a { color: <?php echo get_option('body_font_color'); ?>; }
<?php endif; ?>
<?php if ( get_option('link_color') ) : ?>
a, ul#recentcomments a { color: <?php echo get_option('link_color'); ?>; }
<?php endif; ?>
<?php if ( get_option('line_color') ) : ?>
ul.menu, .post_meta ul li, div.sidebar_widget ul li { border-top: 1px solid <?php echo get_option('line_color'); ?>; border-bottom: 1px solid <?php echo get_option('line_color'); ?>; }
.post_container { border-top: 1px solid <?php echo get_option('line_color'); ?>; }
div.image_frame { border: 1px solid <?php echo get_option('line_color'); ?>; }
ul.menu li ul.sub-menu { border: 1px solid <?php echo get_option('line_color'); ?>; border-bottom: 0px; }
ul.menu li ul.sub-menu li { border-bottom: 1px solid <?php echo get_option('line_color'); ?>; }
div.title, div.post_title, .single_title { border-bottom: 1px solid <?php echo get_option('line_color'); ?>; }
#contact_form input[type="text"], #contact_form textarea { border-bottom: 1px dashed <?php echo get_option('line_color'); ?>; }
<?php endif; ?>
<?php if ( get_option('heading_font') || get_option('heading_color') ) : ?>
h1, h2,  h3, h4, h5, h6, h1 a, h2 a,  h3 a, h4 a, h5 a, h6 a, div.post_title h3, #intro { font-family: '<?php echo get_option("heading_font"); ?>', arial, verdana; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
.post_teaser a.more-link, .image_description { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; }
ul#portfolioFilter li a, .post_meta ul li, ul.commentlist li.comment .comment_author p, ul.commentlist li.comment .comment_author p a, ul.commentlist li.comment .comment_content .comment_meta { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
.services_intro p { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
#about p { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
#contact_form input[type="text"], #contact_form textarea, #respond input[type="text"], #respond textarea { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
#contact_info p, #contact_info ul { font-family: '<?php echo get_option("heading_font"); ?>', 'Times New Roman', serif; <?php if ( get_option("heading_color") ) : ?>color: <?php echo get_option("heading_color"); ?>; <?php endif; ?> }
<?php endif; ?>
<?php if ( get_option('intro_font_size') ) : ?>
#intro { font-size: <?php echo get_option('intro_font_size'); ?>; }
<?php endif; ?>
<?php if ( get_option('intro_font') && get_option('intro_font') != "inherited" ) : ?>
#intro { font-family: '<?php echo get_option("intro_font"); ?>', 'Times New Roman', serif; }
<?php endif; ?>
</style>
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="styles/ie8.css" />
<![endif]-->
<!-- IE Specific script to enable media queries -->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- Javascript files -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/cufon.js"></script>
<?php if ( !get_option('menu_font') ) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/fonts/Andada.font.js"></script>
<?php endif; ?>
<?php if ( get_option('menu_font') ) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/fonts/<?php echo get_option('menu_font'); ?>.font.js"></script>
<?php endif; ?>
<?php if ( !get_option('page_title_font') ) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/fonts/Andada.font.js"></script>
<?php endif; ?>
<?php if ( get_option('page_title_font') ) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/fonts/<?php echo get_option('page_title_font'); ?>.font.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/superfish.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/hoverIntent.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/easing.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/flexslider-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/quicksand.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/tipTip.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/mobilemenu.js"></script>

<?php if ( is_singular() && get_option( 'thread_comments' ) ) : ?>
<script type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/comment-reply.js"></script>
<?php endif; ?>
<script type="text/javascript">
<?php require_once('js_settings.php'); ?>
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/form_validation.js"></script>
<?php echo get_option('analytics_code'); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>

<!--*** WRAPPER ***-->
<div id="wrapper">

     <!--* HEADER *-->
     <div id="header">
          
          <!-- LOGO -->
          <?php if ( get_option('logo_url') ) : ?>
          <div id="logo" style="margin-top: <?php echo get_option('logo_margin'); ?>px;">
               <img src="<?php echo get_option('logo_url'); ?>" alt="<?php echo get_option('logo_alt');?>"  />
          </div>
          <?php endif; ?>