<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('home-interior-designer-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('home-interior-designer-footer-sidebar');
        echo '</div>';
      }
    ?>
  </div>

  <div class="copyright">
    <div class="container">
      <div class="copy-text">
        <p class="mb-0 py-3">
          <?php
            if (!get_theme_mod('home_interior_designer_footer_text') ) { ?>
              <?php esc_html_e('Interior Designer WordPress Theme','home-interior-designer'); ?>
            <?php } else {
              echo esc_html(get_theme_mod('home_interior_designer_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('home_interior_designer_copyright_enable', true) == true ) : ?>
            <?php
            /* translators: %s: Misbah WP */
            printf( esc_html__( 'by %s', 'home-interior-designer' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url('https://wordpress.org'); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'home-interior-designer' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
      <?php if ( get_theme_mod('home_interior_designer_scroll_enable_setting', true) == true ) : ?>
        <div class="scroll-up">
          <a href="#tobottom"><i class="fa fa-arrow-up"></i></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
