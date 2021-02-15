<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php if ( ! get_theme_support( 'title-tag' ) ) : ?>
			<title><?php wp_title(); ?></title>
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class( 'blank-slate' ); ?>>
		<?php wp_body_open(); ?>

		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>


				<div d="post-<?php the_ID(); ?>" class="container">
        <header class="my-header">
					<img class="avatar" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/headshot.jpg'; ?>">
          <h1 class="my-name">Breon Williams</h1>
          <div class="header-social">
            <div class="social-icon">
              <ul>
                <li>
                  <a title="Instagram" href="http://instagram.com/breonwilliams" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a title="Twitter" href="http://twitter.com/breonwilliams" target="_blank"><i class="fa fa-twitter"></i></a>
                </li>
              </ul>
            </div>
            <!--/.social-icon-->
          </div>
          <div class="clearfix"></div>
        </header>
      </div>
<div class="container">
	<div class="row flex-wrap">
	<?php the_content(); ?>
	</div>
</div>
		<?php endwhile; ?>

		<?php wp_footer(); ?>

	</body>
</html>
