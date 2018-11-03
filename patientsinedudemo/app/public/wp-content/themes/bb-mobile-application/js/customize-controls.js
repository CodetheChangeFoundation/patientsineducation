( function( api ) {

	// Extends our custom "bb-mobile-application" section.
	api.sectionConstructor['bb-mobile-application'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );