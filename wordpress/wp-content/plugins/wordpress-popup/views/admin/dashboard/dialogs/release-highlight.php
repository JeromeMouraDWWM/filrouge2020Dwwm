<?php
/**
 * Welcome dialog for fresh installs.
 *
 * @package Hustle
 * @since 4.0.0
 */

$banner_img_1x = self::$plugin_url . 'assets/images/scheduled-modules.png';
$banner_img_2x = self::$plugin_url . 'assets/images/scheduled-modules@2x.png';
?>

<div class="sui-modal sui-modal-md">

	<div
		role="dialog"
		id="hustle-dialog--release-highlight"
		class="sui-modal-content"
		aria-modal="true"
		aria-labelledby="hustle-dialog--release-highlight-title"
		aria-describedby="hustle-dialog--release-highlight-description"
		data-nonce="<?php echo esc_attr( wp_create_nonce( 'hustle_dismiss_notification' ) ); ?>"
	>

		<div class="sui-box">

			<div class="sui-box-header sui-flatten sui-content-center">

				<button class="sui-button-icon sui-button-white sui-button-float--right hustle-modal-close" data-modal-close>
					<span class="sui-icon-close sui-md" aria-hidden="true"></span>
					<span class="sui-screen-reader-text"><?php esc_html_e( 'Close this dialog window', 'hustle' ); ?></span>
				</button>

				<figure role="banner" class="sui-box-banner" style="margin-bottom: 31px;" aria-hidden="true">
					<?php echo Opt_In_Utils::render_image_markup( $banner_img_1x, $banner_img_2x, 'sui-image sui-image-center' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</figure>

				<?php /* translators: current user's name */ ?>
				<h3 id="hustle-dialog--release-highlight-title" class="sui-box-title sui-lg"><?php esc_html_e( 'Schedule your marketing campaigns', 'hustle' ); ?></h3>

				<p id="hustle-dialog--release-highlight-description" class="sui-description">
					<?php esc_html_e( 'Want to display campaigns when they are most relevant to your visitors? Now you can schedule your pop-ups and slide-ins for a specific date range, show them every day or on particular weekdays, and for certain hours of the day.', 'hustle' ); ?>
				</p>

			</div>

			<div class="sui-box-body">

				<p class="sui-description" style="margin-bottom: 5px;"><strong style="color: #333333;"><?php esc_html_e( 'What are the use cases of this feature?', 'hustle' ); ?></strong></p>

				<p class="sui-description" style="margin-bottom: 5px;"><?php esc_html_e( 'While there are numerous use cases, here are some of the more popular ways you can use scheduling to engage your visitors:', 'hustle' ); ?></p>

				<p class="sui-description" style="margin-bottom: 5px;"><?php esc_html_e( '1. Display a module on a specific day of the week during regular business hours (i.e., Monday from 9 AM to 5 PM).', 'hustle' ); ?></p>

				<p class="sui-description" style="margin-bottom: 5px;"><?php esc_html_e( '2. Schedule a campaign for a festive season sale without having to worry about publishing and unpublishing it at the right times.', 'hustle' ); ?></p>

				<p class="sui-description" style="margin-bottom: 5px;"><?php esc_html_e( '3. Planning a vacation? You can get all your campaigns ready in advance and schedule them, so you don’t have to work on your holiday.', 'hustle' ); ?></p>

				<p class="sui-description" style="margin-top: 20px; margin-bottom: 5px;"><strong style="color: #333333;"><?php esc_html_e( 'How to use it?', 'hustle' ); ?></strong></p>

				<p class="sui-description">
					<?php
					printf(
						/* translators: 1. opening 'strong' tag, 2. closing 'strong' tag */
						esc_html__( 'While configuring a pop-up or a slide-in, go to the %1$sBehavior%2$s tab, and under the %1$s"Set Schedule"%2$s setting, click on the %1$sSchedule%2$s button, which would open up a modal where you can schedule your module as per your need.', 'hustle' ),
						'<strong style="color: #666666;">',
						'</strong>'
					);
					?>
				</p>

			</div>

			<div class="sui-box-footer sui-flatten sui-content-center sui-spacing-bottom--40">

				<button class="sui-button" data-modal-close>
					<?php esc_html_e( 'Got it', 'hustle' ); ?>
				</button>

			</div>

		</div>

	</div>

</div>
