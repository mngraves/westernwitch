<?php

/**
 * Title: Hero Content Default
 * Slug: westernwitch/hero-content-default
 * Categories: westernwitch, page
 */
?>


<!-- wp:group {"align":"full","className":"hero-section wp-block-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-section wp-block-section">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
			<!-- wp:image {"id":941,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_parent_theme_file_uri( '/resource/images/frontpage-hero.jpg' ) ); ?>" alt="" class="wp-image-941"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"100%","className":"hero-content"} -->
		<div class="wp-block-column is-vertically-aligned-center hero-content" style="flex-basis:100%">
			<!-- wp:heading {"textAlign":"left","fontSize":"large-section-title"} -->
			<h2 class="wp-block-heading has-text-align-left has-large-section-title-font-size"><?php esc_html_e ( 'Massage Therapy', 'westernwitch' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
				<p><?php esc_html_e('A gentle massage that uses long strokes, kneading, deep circular movements, vibration, and tapping.', 'westernwitch'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:column {"verticalAlignment":"top","width":"","className":"offer-content"} -->
		<div class="wp-block-column is-vertically-aligned-top offer-content offer-right">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"className":"content"} -->
				<div class="wp-block-group content">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="wp-block-heading has-content-heading-font-size"><?php esc_html_e("Massage Therapy", 'westernwitch'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('A gentle massage that uses long strokes, kneading, deep circular movements, vibration, and tapping.', 'westernwitch'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"className":"content"} -->
				<div class="wp-block-group content">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="wp-block-heading has-content-heading-font-size"><?php esc_html_e("Skincare Treatments", 'westernwitch'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('Targets deeper layers of muscle and connective tissue, usually to help with muscle damage from injuries.', 'westernwitch'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"className":"content"} -->
				<div class="wp-block-group content">
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="wp-block-heading has-content-heading-font-size"><?php esc_html_e("Body Treatments", 'westernwitch'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('A gentle massage that uses long strokes usually to help with muscle damage from injuries.', 'westernwitch'); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:column -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->