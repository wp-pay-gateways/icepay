<?php

namespace Pronamic\WordPress\Pay\Gateways\Icepay;

/**
 * Title: ICEPAY - Config factory test
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_Icepay_ConfigFactoryTest extends \PHPUnit_Framework_TestCase {
	public function test_config() {
		$factory = new ConfigFactory();

		$config = $factory->get_config( 0 );

		$this->assertInstanceOf( __NAMESPACE__ . '\Config', $config );
	}
}
