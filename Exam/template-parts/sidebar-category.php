<?php
if ( ! is_active_sidebar( 'sidebar-2' ) ) {
    return;
}
?>

<aside class="widget-area">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside>
