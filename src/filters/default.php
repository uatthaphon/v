<?php

// Return a default value if empty string is passed
return function ( $value, $args ) {
	$default = (string) $args->get( 0 );
	if ( '' == $default ) {
		throw new \InvalidArgumentException( 'Argument 1 should not be a empty string' );
	}
	return '' !== $value ? $value : $default;
};
