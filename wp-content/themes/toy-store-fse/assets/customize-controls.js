( function( api ) {

	// Extends our custom "toy-store-fse" section.
	api.sectionConstructor['toy-store-fse'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );