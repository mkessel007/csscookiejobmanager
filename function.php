// Add specific CSS class by filter
add_filter( 'body_class', 'forfaitclass' );

function forfaitclass( $classes ) {
	if ( ! empty( $_COOKIE['chosen_package_id'] ) ) {
		if  ( $_COOKIE['chosen_package_id'] == '452' ) {
			$classes[] = 'recruteurclassique';
		} elseif ( $_COOKIE['chosen_package_id'] == '373' ) {
			$classes[] = 'recruteurdumois';
		}
	}
	return $classes;
}
