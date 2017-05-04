/**
 * Revelar: Main Theme Scripts
 */
( function( $ ) {
	// Add a class to big image and caption >= 1200px.
	function bigImageClass() {
		$( '.entry-content img.size-full' ).each( function() {
			var img = $( this ),
				caption = $( this ).closest( 'figure' ),
				newImg = new Image();

			newImg.src = img.attr( 'src' );

			$( newImg ).load( function() {
				var imgWidth = newImg.width;

				if ( 1200 <= imgWidth ) {
					$( img ).addClass( 'size-big' );
				}

				if ( caption.hasClass( 'wp-caption' ) && 1200 <= imgWidth ) {
					caption.addClass( 'caption-big' );
					caption.removeAttr( 'style' );
				}
			} );
		} );
	}

	$( document ).ready( function() {
		bigImageClass();
	} );
} )( jQuery );
