<footer>
  <fieldset>
    <div class="site-info">
        <!-- It’s there for you to use if you want to add credit text/links via your child theme -->
    			<?php do_action( 'didactique_credits' ); ?>
          <?php printf( __( 'Thème : %1$s par %2$s.', 'matricecarree' ), 'Matricy', 'Agence Matrice carrée' ); ?>
    			<span class="sep"> | </span>
    			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'L\'agence de rêve', 'matricecarree' ); ?>" rel="generator"><?php printf( __( '© Tous droits réservés' ) ); ?></a>
    </div><!-- .site-info -->
</fieldset>
<?php wp_footer(); ?>
</footer>
</body>
</html>
