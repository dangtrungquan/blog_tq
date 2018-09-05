<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package dotted
 */

get_header(); ?>

  <div class="container">
      <div class="page404 text-center">
          <h2><?php esc_html_e('404','dotted'); ?></h2>
          <p class="color-theme"><?php esc_html_e('Oops. You have encountered an error.','dotted'); ?></p>
          <p><?php esc_html_e('It appears the page your were looking for does not exist. Sorry about that.','dotted'); ?></p>
          <div class="search-404">
              <p><?php esc_html_e('Try to search something...','dotted'); ?></p>
              <?php get_search_form(); ?>
          </div>
          <p>or</p>
          <p><a href="<?php echo esc_url( home_url('/') ); ?>" class="ot-btn btn-main-color btn-rounded ot-lg"><?php esc_html_e(' GO BACK TO HOME','dotted'); ?></a></p>
      </div>
	</div>
	
<?php get_footer(); ?>
