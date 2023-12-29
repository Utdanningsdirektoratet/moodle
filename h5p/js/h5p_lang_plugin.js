// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * When loaded as part of the CKEditor assets, the CKEditor4 Language plugin will be enabled.
 *
 *  @package    core_h5p
 *  @copyright  2023 Audun Lillekjendlie <audun.jorstad.lillekjendlie@udir.no>
 *  @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @see https://h5p.org/adding-text-editor-buttons
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
        H5PEditor.HtmlAddons.text.language = function (config) {
            // Add the plugin.
            config.extraPlugins = (config.extraPlugins ? ',' : '') + 'language';

            // Add plugin to toolbar.
            config.toolbar.push({
                name: "bidi",
                items: ['Language']
            });

            config.language_list = H5PIntegration.languagePluginEnabledLanguages;

        };
    });
})(H5P.jQuery);
