<?php
/**
 * Title: Header Image
 * Slug: blockstarter/header-image
 * Categories: blockstarter
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-illustration.png","id":1876,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","className":"hero-image"} -->
<div class="wp-block-cover alignfull is-light hero-image" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1876" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-illustration.png" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"42px"}},"textColor":"footer"} -->
<h1 class="has-text-align-center has-footer-color has-text-color" style="font-size:42px">Blockstarter</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-large-font-size">Experience the magic of full site editing</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
