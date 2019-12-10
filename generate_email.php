<?php
/**
 *      GENERATE RANDOM EMAIL ADDRESS
 *
 * @param integer $local_max_length  maximum length of user-local section of email address.
 * @param integer $domain_max_length maximum length of domain section of email address.
 *
 * @return string generated email
 */
function generate_email_address( $local_max_length = 64, $domain_max_length = 255 ) {
	$numbers         = '0123456789';
	$letters         = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	$extras          = '.-_';
	$all             = $numbers . $letters . $extras;
	$alpha_numeric   = $letters . $numbers;
	$alpha_numeric_p = $letters . $numbers . '-';
	$random_string   = '';

	// generate first 4 characters of the local-part.
	for ( $i = 0; $i < 4; $i++ ) {
		$random_string .= $letters[rand( 0, strlen( $letters ) - 1 )];
	}

	// generate a number between 20 & local_max_length - 4. 4->above for loop.
	$random_number = rand( 20, $local_max_length - 4 );
	for ( $i = 0; $i < $random_number; $i++ ) {
		$random_string .= $all[ rand( 0, strlen( $all ) - 1 ) ];
	}

	// add an @ symbol...
	$random_string .= '@';

	// generate domain name - initial 3 chars:.
	for ( $i = 0; $i < 3; $i++ ) {
		$random_string .= $letters[rand( 0, strlen( $letters ) - 1 )];
	}

	// generate a number between 15 & $domain_max_length - 7.
	$random_number_2 = rand( 15, $domain_max_length - 7 );
	for ( $i = 0; $i < $random_number_2; $i++ ) {
		$random_string .= $all[rand( 0, strlen( $all ) - 1 )];
	}
	// add an dot . symbol...
	$random_string .= '.';

	// generate tld: 4.
	for ( $i = 0; $i < 4; $i++ ) {
		$random_string .= $alpha_numeric[rand( 0, strlen( $alpha_numeric ) - 1 )];
	}

	return $random_string;
}
?>
