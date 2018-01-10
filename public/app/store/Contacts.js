Ext.define('Contacts.store.Contacts', {
    extend: 'Ext.data.Store',
    model: 'Contacts.model.Contact',
    alias: 'store.contacts',
    autoLoad: true,
    leadingBufferZone: 10,
      pageSize: 20,
    autoLoad: { start: 0, limit: 20 },
    proxy: {
      type: 'ajax',
      api: {
        create: 'contacts/application/create',
        read: 'contacts/application/index',
        update: 'contacts/application/update',
        destroy: 'contacts/application/delete',
      },
      actionMethods: {
        create: 'POST',
        read: 'GET',
        update: 'POST',
        destroy: 'POST',
      },
      reader: {
        type: 'json',
        root: 'data',
        successProperty: 'success',
      },
      writer: {
        type: 'json',
        writeAllFields: true,
        encode: true,
        root: 'data',
      },
    },
  });
  