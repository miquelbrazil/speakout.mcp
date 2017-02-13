<?php

function log_data( $name , $value ) {

	$dir = ROOT . DS . 'logs' . DS;
	$file = microtime() . '-' . $name . '.log';

	if ( $value ) {

		ob_start();
		print_r( $value );
		$data = ob_get_clean();

	} else {

		$data = 'NO DATA' . "\r\n";

	}

	file_put_contents( $dir . $file , $data );
}
