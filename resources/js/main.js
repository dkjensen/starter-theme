( function( $ ) {

	$( '.menu-toggle' ).on( 'click', function( e ) {
		e.preventDefault();

		$( this ).toggleClass( 'is-active' );

		if ( $( this ).hasClass( 'is-active' ) ) {
			$( this ).attr( 'aria-expanded', 'true' );
		} else {
			$( this ).attr( 'aria-expanded', 'false' );
		}

		
	} );

} )( jQuery );
