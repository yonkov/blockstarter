<?php
/**
 * Title: Header Image
 * Slug: blockstarter/header-image
 * Categories: blockstarter
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-illustration.png","id":2257,"dimRatio":60,"overlayColor":"header-image-overlay","minHeight":100,"minHeightUnit":"vh","align":"full","className":"hero-image"} -->
<div class="wp-block-cover alignfull hero-image" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-header-image-overlay-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2257" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-illustration.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"42px"},"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}}},"textColor":"base"} -->
<h1 class="has-text-align-center has-base-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xx-small);font-size:42px">Blockstarter</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"spacing":{"margin":{"top":"0"}}},"textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-large-font-size" style="margin-top:0">Experience the magic of full site editing</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->