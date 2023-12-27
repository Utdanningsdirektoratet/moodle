<?php
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
 * H5P autoloader management class.
 *
 * @package    core_h5p
 * @copyright  2023 Audun Lillekjendlie <audun.jorstad.lillekjendlie@udir.no>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core_h5p\local\langplugin;

/**
 * H5P Language Plugin list of languages.
 */
class languages
{

    /**
     * Returns the list of available languages.
     *
     * @return array with the format: languagecode => language name
     */
    public static function get_available_languages(): array
    {
        return [
            'aa' => 'Afar',
            'ab' => 'Abkhazian (аҧсуа бызшәа)',
            'ae' => 'Avestan',
            'af' => 'Afrikaans',
            'ak' => 'Akan',
            'am' => 'Amharic (አማርኛ)',
            'ar' => 'Arabic (العربية)',
            'as' => 'Assamese',
            'ast' => 'Asturian',
            'av' => 'Avar',
            'ay' => 'Aymara',
            'az' => 'Azerbaijani (azərbaycan)',
            'ba' => 'Bashkir',
            'be' => 'Belarusian (Беларуская)',
            'bg' => 'Bulgarian (Български)',
            'bh' => 'Bihari',
            'bi' => 'Bislama',
            'bm' => 'Bambara (Bamanankan)',
            'bn' => 'Bengali',
            'bo' => 'Tibetan',
            'br' => 'Breton',
            'bs' => 'Bosnian (Bosanski)',
            'ca' => 'Catalan (Català)',
            'ce' => 'Chechen',
            'ch' => 'Chamorro',
            'co' => 'Corsican',
            'cr' => 'Cree',
            'cs' => 'Czech (Čeština)',
            'cu' => 'Old Slavonic',
            'cv' => 'Chuvash',
            'cy' => 'Welsh (Cymraeg)',
            'da' => 'Danish (Dansk)',
            'de' => 'German (Deutsch)',
            'dv' => 'Maldivian',
            'dz' => 'Bhutani',
            'ee' => 'Ewe (Ɛʋɛ)',
            'el' => 'Greek (Ελληνικά)',
            'en' => 'English',
            'en-gb' => 'English, British',
            'eo' => 'Esperanto',
            'es' => 'Spanish (Español)',
            'es-mx' => 'Spanish, Mexican',
            'et' => 'Estonian (Eesti)',
            'eu' => 'Basque (Euskera)',
            'fa' => 'Persian (فارسی)',
            'ff' => 'Fulah (Fulfulde)',
            'fi' => 'Finnish (Suomi)',
            'fil' => 'Filipino',
            'fj' => 'Fiji',
            'fo' => 'Faeroese',
            'fr' => 'French (Français)',
            'fy' => 'Frisian (Frysk)',
            'ga' => 'Irish (Gaeilge)',
            'gd' => 'Scots Gaelic',
            'gl' => 'Galician (Galego)',
            'gn' => 'Guarani',
            'gsw-berne' => 'Swiss German',
            'gu' => 'Gujarati',
            'gv' => 'Manx',
            'ha' => 'Hausa',
            'he' => 'Hebrew (עברית)',
            'hi' => 'Hindi (हिन्दी)',
            'ho' => 'Hiri Motu',
            'hr' => 'Croatian (Hrvatski)',
            'ht' => 'Haitian Creole',
            'hu' => 'Hungarian (Magyar)',
            'hy' => 'Armenian (Հայերեն)',
            'hz' => 'Herero',
            'ia' => 'Interlingua',
            'id' => 'Indonesian (Bahasa Indonesia)',
            'ie' => 'Interlingue',
            'ig' => 'Igbo',
            'ik' => 'Inupiak',
            'is' => 'Icelandic (Íslenska)',
            'it' => 'Italian (Italiano)',
            'iu' => 'Inuktitut',
            'ja' => 'Japanese (日本語)',
            'jv' => 'Javanese',
            'ka' => 'Georgian',
            'kg' => 'Kongo',
            'ki' => 'Kikuyu',
            'kj' => 'Kwanyama',
            'kk' => 'Kazakh (Қазақ)',
            'kl' => 'Greenlandic',
            'km' => 'Cambodian',
            'kn' => 'Kannada (ಕನ್ನಡ)',
            'ko' => 'Korean (한국어)',
            'kr' => 'Kanuri',
            'ks' => 'Kashmiri',
            'ku' => 'Kurdish (Kurdî)',
            'kv' => 'Komi',
            'kw' => 'Cornish',
            'ky' => 'Kyrgyz (Кыргызча)',
            'la' => 'Latin (Latina)',
            'lb' => 'Luxembourgish',
            'lg' => 'Luganda',
            'ln' => 'Lingala',
            'lo' => 'Laothian',
            'lt' => 'Lithuanian (Lietuvių)',
            'lv' => 'Latvian (Latviešu)',
            'mg' => 'Malagasy',
            'mh' => 'Marshallese',
            'mi' => 'Māori',
            'mk' => 'Macedonian (Македонски)',
            'ml' => 'Malayalam (മലയാളം)',
            'mn' => 'Mongolian',
            'mo' => 'Moldavian',
            'mr' => 'Marathi',
            'ms' => 'Malay (Bahasa Melayu)',
            'mt' => 'Maltese (Malti)',
            'my' => 'Burmese',
            'na' => 'Nauru',
            'nd' => 'North Ndebele',
            'ne' => 'Nepali',
            'ng' => 'Ndonga',
            'nl' => 'Dutch (Nederlands)',
            'nb' => 'Norwegian Bokmål (Bokmål)',
            'nn' => 'Norwegian Nynorsk (Nynorsk)',
            'nr' => 'South Ndebele',
            'nv' => 'Navajo',
            'ny' => 'Chichewa',
            'oc' => 'Occitan',
            'om' => 'Oromo',
            'or' => 'Oriya',
            'os' => 'Ossetian',
            'pa' => 'Punjabi',
            'pi' => 'Pali',
            'pl' => 'Polish (Polski)',
            'ps' => 'Pashto (پښتو)',
            'pt' => 'Portuguese, International',
            'pt-pt' => 'Portuguese, Portugal (Português)',
            'pt-br' => 'Portuguese, Brazil (Português)',
            'qu' => 'Quechua',
            'rm' => 'Rhaeto-Romance',
            'rn' => 'Kirundi',
            'ro' => 'Romanian (Română)',
            'ru' => 'Russian (Русский)',
            'rw' => 'Kinyarwanda',
            'sa' => 'Sanskrit',
            'sc' => 'Sardinian',
            'sco' => 'Scots',
            'sd' => 'Sindhi',
            'se' => 'Northern Sami',
            'sg' => 'Sango',
            'sh' => 'Serbo-Croatian',
            'si' => 'Sinhala (සිංහල)',
            'sk' => 'Slovak (Slovenčina)',
            'sl' => 'Slovenian (Slovenščina)',
            'sm' => 'Samoan',
            'sma' => 'Sámi (Southern)',
            'sme' => 'Sámi (Northern)',
            'smj' => 'Sámi (Lule)',
            'sn' => 'Shona',
            'so' => 'Somali',
            'sq' => 'Albanian (Shqip)',
            'sr' => 'Serbian (Српски)',
            'ss' => 'Siswati',
            'st' => 'Sesotho',
            'su' => 'Sudanese',
            'sv' => 'Swedish (Svenska)',
            'sw' => 'Swahili (Kiswahili)',
            'ta' => 'Tamil (தமிழ்)',
            'te' => 'Telugu (తెలుగు)',
            'tg' => 'Tajik',
            'th' => 'Thai (ภาษาไทย)',
            'ti' => 'Tigrinya',
            'tk' => 'Turkmen',
            'tl' => 'Tagalog',
            'tn' => 'Setswana',
            'to' => 'Tonga',
            'tr' => 'Turkish (Türkçe)',
            'ts' => 'Tsonga',
            'tt' => 'Tatar (Tatarça)',
            'tw' => 'Twi',
            'ty' => 'Tahitian',
            'ug' => 'Uyghur',
            'uk' => 'Ukrainian (Українська)',
            'ur' => 'Urdu (اردو)',
            'uz' => 'Uzbek (o\'zbek)',
            've' => 'Venda',
            'vi' => 'Vietnamese (Tiếng Việt)',
            'wo' => 'Wolof',
            'xh' => 'Xhosa (isiXhosa)',
            'xx-lolspeak' => 'Lolspeak)',
            'yi' => 'Yiddish',
            'yo' => 'Yoruba (Yorùbá)',
            'za' => 'Zhuang',
            'zh' => 'Chinese',
            'zh-hans' => 'Chinese, Simplified (简体中文)',
            'zh-hant' => 'Chinese, Traditional (繁體中文)',
            'zh-tw' => 'Chinese, Taiwan, Traditional',
            'zu' => 'Zulu (isiZulu)'
        ];
    }

    /**
     * Returns the list of enabled languages.
     *
     * @return array with the format: languagecode => language name
     */
    public static function get_enabled_languages(): array
    {
        global $CFG;
        $enabledCodes = $CFG->h5p_languageplugin_languages;
        $enabledCodes = explode(',', $enabledCodes);
        $availableLanguages = self::get_available_languages();
        $enabledLanguages = [];
        foreach ($enabledCodes as $code) {
            if (empty($code)) {
                continue;
            }
            $enabledLanguages[$code] = $availableLanguages[$code];
        }
        return $enabledLanguages;
    }

    public static function get_enabled_languages_as_ckeditor_array(): array
    {
        $enabledLanguages = self::get_enabled_languages();
        $arr = [];
        foreach ($enabledLanguages as $code => $name) {
            $arr[] = "$code:$name";
        }
        return $arr;
    }
}
