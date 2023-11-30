<?php
/**
 * Displays the site navigation.
 *
 * @package oceanedge
 */

$wrapper_classes  = 'site-header';
?>

<nav class="navbar navbar-expand-lg navbar-light container py-1">

    <!-- Site Branding -->
    <?php get_template_part( 'template-parts/header/site-branding' ); ?>

    <?php if ( has_nav_menu( 'primary' ) ) : ?>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php echo esc_attr__( 'Toggle navigation', 'oceanedge' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'items_wrap'      => '<ul id="primary-menu-list" class="navbar-nav ml-auto">%3$s</ul>',
                    'fallback_cb'     => false,
                )
            );
            ?>

            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                <div class="cart-icon">
                    <a href="<?php echo wc_get_cart_url(); ?>" class="cart-contents">
                        <span class="dashicons dashicons-cart"></span>
                        <span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </a>
                </div>
            <?php endif; ?>

            <button class="mobile-menu-close"><img src="<?php echo oceanedge_THEME_ASSETS_DIR; ?>/images/close.png" alt="Close" ></button>
        </div><!-- #navbarNav -->
    <?php endif; ?>

</nav>