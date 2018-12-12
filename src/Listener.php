<?php

namespace Pronamic\WordPress\Pay\Gateways\Icepay;

use Pronamic\WordPress\Pay\Core\Util;
use Pronamic\WordPress\Pay\Plugin;

/**
 * Title: ICEPAY listener
 * Description:
 * Copyright: Copyright (c) 2005 - 2018
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 2.0.1
 */
class Listener {
	/**
	 * Listen.
	 */
	public static function listen() {
		$variable_names = array(
			'Status',
			'StatusCode',
			'Merchant',
			'OrderID',
			'PaymentID',
			'Reference',
			'TransactionID',
			'Checksum',
		);

		if ( ! Util::input_has_vars( INPUT_GET, $variable_names ) ) {
			return;
		}

		$reference = filter_input( INPUT_GET, 'OrderID', FILTER_SANITIZE_STRING );

		$payment = get_pronamic_payment( $reference );

		// Add note.
		$note = sprintf(
			/* translators: %s: ICEPAY */
			__( 'Webhook requested by %s.', 'pronamic_ideal' ),
			__( 'ICEPAY', 'pronamic_ideal' )
		);

		$payment->add_note( $note );

		// Update payment.
		Plugin::update_payment( $payment );
	}
}
