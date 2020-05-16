<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DigiTecz
 */
?>

<!DOCTYPE html>
<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
		<title>Digitecz - 404 Not found</title>
		<meta name="description" content="404 error page of digitecz.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="digitecz">
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/404-assets/img/favicon.png">

		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/404-assets/css/hover.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/404-assets/css/style.css" />
	</head>

	<body>
        <canvas id="dotty"></canvas>

        <!-- Your logo on the top left -->
        <a href="<?php echo get_site_url(); ?>" class="logo-link" title="back to home">

            <img src="<?php echo get_bloginfo('template_directory'); ?>/404-assets/img/logo.png" class="logo" alt="Digitecz logo" />

        </a>

        <div class="content">

            <div class="content-box">

                <div class="big-content">

                    <!-- Main squares for the content logo in the background -->
                    <div class="list-square">
                        <span class="square"></span>
                        <span class="square"></span>
                        <span class="square"></span>
                    </div>

                    <!-- Main lines for the content logo in the background -->
                    <div class="list-line">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>

                    <!-- The animated searching tool -->
                    <i class="fa fa-search" aria-hidden="true"></i>

                    <!-- div clearing the float -->
                    <div class="clear"></div>

                </div>

                <!-- Your text -->
                <h1>Oops! Error 404 not found.</h1>

                <p>The page you were looking for doesn't exist.<br>
                    We think the page may have moved.</p>

                <a class="btn btn-border btn-send hvr-sweep-to-top text-center" href="<?php echo get_site_url(); ?>">Back to Home</a>

            </div>
        </div>

        <script src="<?php echo get_bloginfo('template_directory'); ?>/404-assets/js/jquery.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/404-assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/404-assets/js/mozaic.js"></script>

    </body>
</html>
