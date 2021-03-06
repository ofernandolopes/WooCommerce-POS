<?php

/**
 * WP Checkout Settings Class
 *
 * @package    WCPOS\Admin_Settings_General
 * @author   Paul Kilmurray <paul@kilbot.com.au>
 * @link     http://www.wcpos.com
 */

namespace WCPOS\Admin\Settings;

class Products extends Page {

	protected static $instance;

	public $flush_local_data = array(
		'pos_only_products',
		'decimal_qty'
	);

	/**
	 * Each settings tab requires an id and label
	 */
	public function __construct() {
		$this->id = 'products';
		/* translators: woocommerce */
		$this->label = __( 'Products', 'woocommerce' );

		$this->defaults = array(
			'tabs' => array(
				array(
					/* translators: woocommerce */
					'label' => __( 'All', 'woocommerce' )
				),
				array(
					/* translators: woocommerce */
					'label'  => __( 'Featured', 'woocommerce' ),
					'filter' => 'featured:true'
				),
				array(
					'label'  => _x( 'On Sale', 'Product tab: \'On Sale\' products', 'woocommerce-pos' ),
					'filter' => 'on_sale:true'
				)
			)
		);
	}

}
