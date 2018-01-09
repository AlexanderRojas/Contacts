Ext.define('Contacts.model.Contact', {
    extend: 'Contacts.model.Base',

    fields: [
		'id',
		'name',
		'identification',
		{ name: 'address', mapping: 'address.address' },
		{ name: 'city', mapping: 'address.city' },
		'email',
		'phonePrimary',
		'phoneSecondary',
		'fax',
		'mobile',
		'priceList',
		'seller',
		'term',
		'isClient',
		'isProvider',
		'observations',
	],
});
