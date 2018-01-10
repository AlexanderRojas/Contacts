/*
 * This file launches the application by asking Ext JS to create
 * and launch() the Application class.
 */
Ext.application({
    extend: 'public.Application',

    name: 'public',

    requires: [
        // This will automatically load all classes in the public namespace
        // so that application classes do not need to require each other.
        'public.*'
    ],

    // The name of the initial view to create.
    mainView: 'public.view.main.Main'
});
