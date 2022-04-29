</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">

    <div class="footer_widget footer_widget1">
      <?php
      dynamic_sidebar( 'footer_widget1' );
      ?>
    </div>
    <div class="footer_widget footer_widget2">
      <?php
      dynamic_sidebar( 'footer_widget2' );
      ?>
    </div>
    <div class="footer_widget footer_widget3">
      <?php
      dynamic_sidebar( 'footer_widget3' );
      ?>
    </div>
    <div class="footer_widget footer_widget4">
      <?php
      dynamic_sidebar( 'footer_widget4' );
      ?>
    </div>

<div id="copyright" class="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'inside' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
