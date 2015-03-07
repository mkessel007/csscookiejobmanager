// Add specific CSS class by filter
add_filter( 'body_class', 'forfaitclass' );
function forfaitclass( $classes ) {
	// add 'class-name' to the $classes array
	if  ($_COOKIE['chosen_package_id'] == '452')
	$classes[] = 'recruteurclassique';
else
	if
	($_COOKIE['chosen_package_id'] == '373')
	$classes[] = 'recruteurdumois';
	return $classes;
	// return the $classes arra
	  
}