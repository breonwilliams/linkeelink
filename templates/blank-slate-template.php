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

        <div class="row flex-wrap">
          <a href="#" target="_blank" class="flex-item m-3 pt-5 pr-5 pl-5 rounded hvr-buzz-out my-card mofx-card">
						<img class="card-logo" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/mofx_logo.svg'; ?>">
            <h2 class="card-subheading">Mind Over FX <small>coming soon</small></h2>
            <h3 class="card-heading">Learn how I trade the forex market for FREE!</h3>
            <p>I created Mind Over FX to insure anyone can identify quality trade setups using simple chart patterns. This online course is made for beginners to teach them all the key terms you’ll need to know and help you learn simple trading strategies that can be applied to any market.</p>
            <span class="btn btn-primary my-button">Get The Free Course</span>
          </a>
          <a href="https://author.breonwilliams.com" target="_blank" class="flex-item m-3 pt-5 pr-5 pl-5 rounded hvr-buzz-out my-card books-card">
						<img class="card-logo" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/how_to_speak_money.svg'; ?>">
            <h2 class="card-subheading">My children's books</h2>
            <h3 class="card-heading">“How To Speak Money” makes learning finance simple using fun rhymes and entertaining illustrations</h3>
            <p>I set out to write children’s books that help parents understand it’s never too early to begin teaching their children valuable life skills they will use throughout their lifetime.</p>
            <span class="btn btn-primary my-button">Get The Book</span>
          </a>
        </div>
      </div>


		<?php endwhile; ?>

		<?php wp_footer(); ?>

	</body>
</html>
