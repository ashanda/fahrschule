<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fahrschule
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title><?php $blog_title = get_bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="body" style="background-image:
    linear-gradient(to bottom, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.12)),
    url('<?php echo get_template_directory_uri(); ?>/inc/img/background2.jpg');">
        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
					<?php
                                       wp_nav_menu( array(
                                       'theme_location' => 'menu-1',
                                       'depth' => 6,
                                       'container' => 'false',
                                       'container_class' => 'navbar-collapse collapse',
                                       'container_id' => 'navbarSupportedContent',
                                       
                                       'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                      
                                        'add_a_class' => 'nav-link',
                                       'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                       'walker' => new WP_Bootstrap_Navwalker(),
                                       ) );
                                       ?>

                  

                </div>
            </div>
        </nav>
        <!-- navbar end -->

