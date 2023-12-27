/**
 * If this script is loaded as part of the CKEditor assets, it will enable the language plugin.
 */
(function ($) {
    $(document).ready(function () {
        if (!window.CKEDITOR) {
            return;
        }

        // Register our plugin
        CKEDITOR.plugins.addExternal('language', '/h5p/js/editor/ckeditor/plugins/language/', 'plugin.js');
        H5PEditor.HtmlAddons = H5PEditor.HtmlAddons || {};
        H5PEditor.HtmlAddons.text = H5PEditor.HtmlAddons.text || {};
        H5PEditor.HtmlAddons.text.language = function (config, tags) {
            // Add the plugin.
            config.extraPlugins = (config.extraPlugins ? ',' : '') + 'language';

            // Add plugin to toolbar.
            config.toolbar.push({
                name: "bidi",
                items: ['Language']
            });

            config.language_list = H5PIntegration.languagePluginLangs;

        };
    });
})(H5P.jQuery);
