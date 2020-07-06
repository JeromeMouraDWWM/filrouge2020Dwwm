<?php
/**
 * Dashboard Hustle analytics widget: Displayed on site dashboards with stats.
 *
 * @package Hustle
 * @since 4.1.0
 */

//$analytics_stats = Hustle_Tracking_Model::analytics_stats( 30 );

$array_days_ago = Opt_In_Utils::get_analytic_ranges();
$days_ago       = ( isset( $_REQUEST['analytics_range'] ) && in_array( $_REQUEST['analytics_range'], array_keys( $array_days_ago ), true ) ) ? absint( $_REQUEST['analytics_range'] ) : 7; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
?>
<div class="hustle-widget" data-nonce="<?php echo esc_attr( wp_create_nonce( 'hustle_update_wp_dashboard_chart' ) ); ?>">

	<form class="hustle-widget-header">

		<div class="hustle-form-field">

			<label for="hustle-analytics-show" id="hustle-analytics-show-label" class="hustle-label"  aria-labelledby="hustle-analytics-show-label"><?php esc_html_e( 'Show', 'hustle' ); ?></label>

			<select id="hustle-analytics-show" class="hustle-select">
				<option value="view"><?php esc_html_e( 'Views', 'hustle' ); ?></option>
				<option value="conversion" selected><?php esc_html_e( 'Conversions', 'hustle' ); ?></option>
				<option value="rate"><?php esc_html_e( 'Conversion Rate', 'hustle' ); ?></option>
			</select>

		</div>

		<div class="hustle-form-field">

			<label for="hustle-analytics-data" id="hustle-analytics-data-label" class="hustle-label"><?php esc_html_e( 'data for', 'hustle' ); ?></label>

			<select id="hustle-analytics-data" class="hustle-select" aria-labelledby="hustle-analytics-data-label">
				<?php foreach ( $array_days_ago as $val => $range_title ) : ?>
					<option value="<?php echo esc_attr( $val ); ?>"<?php selected( $val, $days_ago ); ?>><?php echo esc_html( $range_title ); ?></option>
				<?php endforeach; ?>
			</select>

		</div>

		<button id="hustle-analytics-apply" class="button hustle-button"><?php esc_html_e( 'Apply', 'hustle' ); ?></button>

	</form>

	<div class="hustle-widget-body">

		<div class="hustle-options-embed" style="display: none;">

			<button role="tab" class="hustle-option hustle-active" aria-selected="true" data-display-type="overall"><?php esc_html_e( 'Total', 'hustle' ); ?></button>

			<button role="tab" class="hustle-option" aria-selected="false" data-display-type="<?php echo esc_attr( Hustle_SShare_Model::FLOAT_MODULE ); ?>"><?php esc_html_e( 'Floating', 'hustle' ); ?></button>

			<button role="tab" class="hustle-option" aria-selected="false" data-display-type="<?php echo esc_attr( Hustle_Module_Model::INLINE_MODULE ); ?>"><?php esc_html_e( 'Inline', 'hustle' ); ?></button>

			<button role="tab" class="hustle-option" aria-selected="false" data-display-type="<?php echo esc_attr( Hustle_Module_Model::WIDGET_MODULE ); ?>"><?php esc_html_e( 'Widget', 'hustle' ); ?></button>

			<button role="tab" class="hustle-option" aria-selected="false" data-display-type="<?php echo esc_attr( Hustle_Module_Model::SHORTCODE_MODULE ); ?>"><?php esc_html_e( 'Shortcode', 'hustle' ); ?></button>

		</div>

		<div class="hustle-chart-wrap">

			<div class="hustle-options-chart">

				<button role="tab" class="hustle-option hustle-active" aria-selected="true" data-module-type="overall">
					<span class="hustle-option--title"><?php esc_html_e( 'Overall', 'hustle' ); ?></span>
					<span class="hustle-option--value">10,000</span>
					<span class="hustle-option--trend hustle-up"><span class="sui-icon-arrow-up sui-sm" aria-hidden="true"></span> 2.5%</span>
				</button>

				<button role="tab" class="hustle-option" aria-selected="false" data-module-type="<?php echo esc_attr( Hustle_Module_Model::POPUP_MODULE ); ?>">
					<span class="hustle-option--title"><?php esc_html_e( 'Pop-ups', 'hustle' ); ?></span>
					<span class="hustle-option--value">2453</span>
					<span class="hustle-option--trend hustle-down"><span class="sui-icon-arrow-down sui-sm" aria-hidden="true"></span> 1.2%</span>
				</button>

				<button role="tab" class="hustle-option" aria-selected="false" data-module-type="<?php echo esc_attr( Hustle_Module_Model::SLIDEIN_MODULE ); ?>">
					<span class="hustle-option--title"><?php esc_html_e( 'Slide-ins', 'hustle' ); ?></span>
					<span class="hustle-option--value">1346</span>
					<span class="hustle-option--trend hustle-up"><span class="sui-icon-arrow-up sui-sm" aria-hidden="true"></span> 15%</span>
				</button>

				<button role="tab" class="hustle-option" aria-selected="false" data-module-type="<?php echo esc_attr( Hustle_Module_Model::EMBEDDED_MODULE ); ?>">
					<span class="hustle-option--title"><?php esc_html_e( 'Embeds', 'hustle' ); ?></span>
					<span class="hustle-option--value">4003</span>
					<span class="hustle-option--trend hustle-down"><span class="sui-icon-arrow-down sui-sm" aria-hidden="true"></span> 12.5%</span>
				</button>

				<button role="tab" class="hustle-option" aria-selected="false" data-module-type="<?php echo esc_attr( Hustle_Module_Model::SOCIAL_SHARING_MODULE ); ?>">
					<span class="hustle-option--title"><?php esc_html_e( 'Social Sharing', 'hustle' ); ?></span>
					<span class="hustle-option--value">-</span>
					<span class="hustle-option--trend">0%</span>
				</button>

			</div>

			<div class="hustle-chart-graph">

				<!--<div class="hustle-message-empty">
					<p class="hustle-title">We haven’t collected enough data yet.</p>
					<p class="hustle-text">You will start viewing the performance statistics of your Hustle modules shortly. So feel free to check back soon</p>
				</div>-->

				<canvas id="hustle-analytics-chart"></canvas>

			</div>

		</div>

	</div>

</div>
