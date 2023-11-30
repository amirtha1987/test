<?php
/**
 * Displays the Search in header.
 *
 * @package oceanedge
 */
?>

<div class="header-right-section d-flex align-items-center ml-md-4">
    <div class="header-search relative">
        <button id="click" class="white-link d-inline-block">
            <?php
            $search_img = oceanedge_THEME_ASSETS_DIR . '/images/search.png';
            ?>
            <img src="<?php echo esc_url( $search_img ); ?>" alt="<?php esc_attr_e( 'Search Icon', 'oceanedge' ); ?>" >
        </button>
        <form id="search-field" class="search-field-form" action="/">
            <input type="text" name="s" placeholder="<?php esc_attr_e( 'Search here...', 'oceanedge' ); ?>" value="<?php echo get_search_query(); ?>">
            <input type="submit" value="search">
        </form>
    </div>
</div>
