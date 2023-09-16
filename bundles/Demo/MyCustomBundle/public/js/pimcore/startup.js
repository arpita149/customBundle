pimcore.registerNS("pimcore.plugin.MyCustomBundle");

pimcore.plugin.MyCustomBundle = Class.create({

    initialize: function () {
        document.addEventListener(pimcore.events.pimcoreReady, this.pimcoreReady.bind(this));
    },

    pimcoreReady: function (e) {
        // alert("MyCustomBundle ready!");
    }
});

var MyCustomBundlePlugin = new pimcore.plugin.MyCustomBundle();
