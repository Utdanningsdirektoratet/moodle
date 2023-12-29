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
 * H5P: Languages for CKEditor Language Plugin.
 *
 * @package    core_h5p
 * @copyright  2023 Audun Lillekjendlie <audun.jorstad.lillekjendlie@udir.no>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core_h5p\local\langplugin;

class languages
{

    /**
     * Returns the list of available languages.
     *
     * @return array with the format: ["language-code" => language, ...]
     * @see language
     */
    public static function get_available_languages(): array
    {
        return [
            'aa' => new language('aa', 'Afar'),
            'ab' => new language('ab', 'Abkhazian (аҧсуа бызшәа)'),
            'ae' => new language('ae', 'Avestan'),
            'af' => new language('af', 'Afrikaans'),
            'ak' => new language('ak', 'Akan'),
            'am' => new language('am', 'Amharic (አማርኛ)'),
            'ar' => new language('ar', 'Arabic (العربية)', true),
            'as' => new language('as', 'Assamese'),
            'ast' => new language('ast', 'Asturian'),
            'av' => new language('av', 'Avar'),
            'ay' => new language('ay', 'Aymara'),
            'az' => new language('az', 'Azerbaijani (azərbaycan)'),
            'ba' => new language('ba', 'Bashkir'),
            'be' => new language('be', 'Belarusian (Беларуская)'),
            'bg' => new language('bg', 'Bulgarian (Български)'),
            'bh' => new language('bh', 'Bihari'),
            'bi' => new language('bi', 'Bislama'),
            'bm' => new language('bm', 'Bambara (Bamanankan)'),
            'bn' => new language('bn', 'Bengali'),
            'bo' => new language('bo', 'Tibetan'),
            'br' => new language('br', 'Breton'),
            'bs' => new language('bs', 'Bosnian (Bosanski)'),
            'ca' => new language('ca', 'Catalan (Català)'),
            'ce' => new language('ce', 'Chechen'),
            'ch' => new language('ch', 'Chamorro'),
            'co' => new language('co', 'Corsican'),
            'cr' => new language('cr', 'Cree'),
            'cs' => new language('cs', 'Czech (Čeština)'),
            'cu' => new language('cu', 'Old Slavonic'),
            'cv' => new language('cv', 'Chuvash'),
            'cy' => new language('cy', 'Welsh (Cymraeg)'),
            'da' => new language('da', 'Danish (Dansk)'),
            'de' => new language('de', 'German (Deutsch)'),
            'dv' => new language('dv', 'Maldivian', true),
            'dz' => new language('dz', 'Bhutani'),
            'ee' => new language('ee', 'Ewe (Ɛʋɛ)'),
            'el' => new language('el', 'Greek (Ελληνικά)'),
            'en' => new language('en', 'English'),
            'en-gb' => new language('en-gb', 'English, British'),
            'eo' => new language('eo', 'Esperanto'),
            'es' => new language('es', 'Spanish (Español)'),
            'es-mx' => new language('es-mx', 'Spanish, Mexican'),
            'et' => new language('et', 'Estonian (Eesti)'),
            'eu' => new language('eu', 'Basque (Euskera)'),
            'fa' => new language('fa', 'Persian (فارسی)', true),
            'ff' => new language('ff', 'Fulah (Fulfulde)'),
            'fi' => new language('fi', 'Finnish (Suomi)'),
            'fil' => new language('fil', 'Filipino'),
            'fj' => new language('fj', 'Fiji'),
            'fo' => new language('fo', 'Faeroese'),
            'fr' => new language('fr', 'French (Français)'),
            'fy' => new language('fy', 'Frisian (Frysk)'),
            'ga' => new language('ga', 'Irish (Gaeilge)'),
            'gd' => new language('gd', 'Scots Gaelic'),
            'gl' => new language('gl', 'Galician (Galego)'),
            'gn' => new language('gn', 'Guarani'),
            'gsw-berne' => new language('gsw-berne', 'Swiss German'),
            'gu' => new language('gu', 'Gujarati'),
            'gv' => new language('gv', 'Manx'),
            'ha' => new language('ha', 'Hausa', true),
            'he' => new language('he', 'Hebrew (עברית)', true),
            'hi' => new language('hi', 'Hindi (हिन्दी)'),
            'ho' => new language('ho', 'Hiri Motu'),
            'hr' => new language('hr', 'Croatian (Hrvatski)'),
            'ht' => new language('ht', 'Haitian Creole'),
            'hu' => new language('hu', 'Hungarian (Magyar)'),
            'hy' => new language('hy', 'Armenian (Հայերեն)'),
            'hz' => new language('hz', 'Herero'),
            'ia' => new language('ia', 'Interlingua'),
            'id' => new language('id', 'Indonesian (Bahasa Indonesia)'),
            'ie' => new language('ie', 'Interlingue'),
            'ig' => new language('ig', 'Igbo'),
            'ik' => new language('ik', 'Inupiak'),
            'is' => new language('is', 'Icelandic (Íslenska)'),
            'it' => new language('it', 'Italian (Italiano)'),
            'iu' => new language('iu', 'Inuktitut'),
            'ja' => new language('ja', 'Japanese (日本語)'),
            'jv' => new language('jv', 'Javanese'),
            'ka' => new language('ka', 'Georgian'),
            'kg' => new language('kg', 'Kongo'),
            'ki' => new language('ki', 'Kikuyu'),
            'kj' => new language('kj', 'Kwanyama'),
            'kk' => new language('kk', 'Kazakh (Қазақ)'),
            'kl' => new language('kl', 'Greenlandic'),
            'km' => new language('km', 'Cambodian'),
            'kn' => new language('kn', 'Kannada (ಕನ್ನಡ)'),
            'ko' => new language('ko', 'Korean (한국어)'),
            'kr' => new language('kr', 'Kanuri'),
            'ks' => new language('ks', 'Kashmiri', true),
            'ku' => new language('ku', 'Kurdish (Kurdî)'),
            'kv' => new language('kv', 'Komi'),
            'kw' => new language('kw', 'Cornish'),
            'ky' => new language('ky', 'Kyrgyz (Кыргызча)'),
            'la' => new language('la', 'Latin (Latina)'),
            'lb' => new language('lb', 'Luxembourgish'),
            'lg' => new language('lg', 'Luganda'),
            'ln' => new language('ln', 'Lingala'),
            'lo' => new language('lo', 'Laothian'),
            'lt' => new language('lt', 'Lithuanian (Lietuvių)'),
            'lv' => new language('lv', 'Latvian (Latviešu)'),
            'mg' => new language('mg', 'Malagasy'),
            'mh' => new language('mh', 'Marshallese'),
            'mi' => new language('mi', 'Māori'),
            'mk' => new language('mk', 'Macedonian (Македонски)'),
            'ml' => new language('ml', 'Malayalam (മലയാളം)'),
            'mn' => new language('mn', 'Mongolian'),
            'mo' => new language('mo', 'Moldavian'),
            'mr' => new language('mr', 'Marathi'),
            'ms' => new language('ms', 'Malay (Bahasa Melayu)'),
            'mt' => new language('mt', 'Maltese (Malti)'),
            'my' => new language('my', 'Burmese'),
            'na' => new language('na', 'Nauru'),
            'nd' => new language('nd', 'North Ndebele'),
            'ne' => new language('ne', 'Nepali'),
            'ng' => new language('ng', 'Ndonga'),
            'nl' => new language('nl', 'Dutch (Nederlands)'),
            'nb' => new language('nb', 'Norwegian Bokmål (Bokmål)'),
            'nn' => new language('nn', 'Norwegian Nynorsk (Nynorsk)'),
            'nr' => new language('nr', 'South Ndebele'),
            'nv' => new language('nv', 'Navajo'),
            'ny' => new language('ny', 'Chichewa'),
            'oc' => new language('oc', 'Occitan'),
            'om' => new language('om', 'Oromo'),
            'or' => new language('or', 'Oriya'),
            'os' => new language('os', 'Ossetian'),
            'pa' => new language('pa', 'Punjabi'),
            'pi' => new language('pi', 'Pali'),
            'pl' => new language('pl', 'Polish (Polski)'),
            'ps' => new language('ps', 'Pashto (پښتو)', true),
            'pt' => new language('pt', 'Portuguese, International'),
            'pt-pt' => new language('pt-pt', 'Portuguese, Portugal (Português)'),
            'pt-br' => new language('pt-br', 'Portuguese, Brazil (Português)'),
            'qu' => new language('qu', 'Quechua'),
            'rm' => new language('rm', 'Rhaeto-Romance'),
            'rn' => new language('rn', 'Kirundi'),
            'ro' => new language('ro', 'Romanian (Română)'),
            'ru' => new language('ru', 'Russian (Русский)'),
            'rw' => new language('rw', 'Kinyarwanda'),
            'sa' => new language('sa', 'Sanskrit'),
            'sc' => new language('sc', 'Sardinian'),
            'sco' => new language('sco', 'Scots'),
            'sd' => new language('sd', 'Sindhi', true),
            'se' => new language('se', 'Northern Sami'),
            'sg' => new language('sg', 'Sango'),
            'sh' => new language('sh', 'Serbo-Croatian'),
            'si' => new language('si', 'Sinhala (සිංහල)'),
            'sk' => new language('sk', 'Slovak (Slovenčina)'),
            'sl' => new language('sl', 'Slovenian (Slovenščina)'),
            'sm' => new language('sm', 'Samoan'),
            'sma' => new language('sma', 'Sámi (Southern)'),
            'sme' => new language('sme', 'Sámi (Northern)'),
            'smj' => new language('smj', 'Sámi (Lule)'),
            'sn' => new language('sn', 'Shona'),
            'so' => new language('so', 'Somali'),
            'sq' => new language('sq', 'Albanian (Shqip)'),
            'sr' => new language('sr', 'Serbian (Српски)'),
            'ss' => new language('ss', 'Siswati'),
            'st' => new language('st', 'Sesotho'),
            'su' => new language('su', 'Sudanese'),
            'sv' => new language('sv', 'Swedish (Svenska)'),
            'sw' => new language('sw', 'Swahili (Kiswahili)'),
            'ta' => new language('ta', 'Tamil (தமிழ்)'),
            'te' => new language('te', 'Telugu (తెలుగు)'),
            'tg' => new language('tg', 'Tajik'),
            'th' => new language('th', 'Thai (ภาษาไทย)'),
            'ti' => new language('ti', 'Tigrinya'),
            'tk' => new language('tk', 'Turkmen'),
            'tl' => new language('tl', 'Tagalog'),
            'tn' => new language('tn', 'Setswana'),
            'to' => new language('to', 'Tonga'),
            'tr' => new language('tr', 'Turkish (Türkçe)'),
            'ts' => new language('ts', 'Tsonga'),
            'tt' => new language('tt', 'Tatar (Tatarça)'),
            'tw' => new language('tw', 'Twi'),
            'ty' => new language('ty', 'Tahitian'),
            'ug' => new language('ug', 'Uyghur'),
            'uk' => new language('uk', 'Ukrainian (Українська)'),
            'ur' => new language('ur', 'Urdu (اردو)', true),
            'uz' => new language('uz', 'Uzbek (o\'zbek)'),
            've' => new language('ve', 'Venda'),
            'vi' => new language('vi', 'Vietnamese (Tiếng Việt)'),
            'wo' => new language('wo', 'Wolof'),
            'xh' => new language('xh', 'Xhosa (isiXhosa)'),
            'xx-lolspeak' => new language('xx-lolspeak', 'Lolspeak)'),
            'yi' => new language('yi', 'Yiddish', true),
            'yo' => new language('yo', 'Yoruba (Yorùbá)'),
            'za' => new language('za', 'Zhuang'),
            'zh' => new language('zh', 'Chinese'),
            'zh-hans' => new language('zh-hans', 'Chinese, Simplified (简体中文)'),
            'zh-hant' => new language('zh-hant', 'Chinese, Traditional (繁體中文)'),
            'zh-tw' => new language('zh-tw', 'Chinese, Taiwan, Traditional'),
            'zu' => new language('zu', 'Zulu (isiZulu)')
        ];
    }

    /**
     * Retrieves a mapping of language codes to their names.
     * This method is useful for generating simple key-value pairs, where the key is the language code and the value is
     * the corresponding language name.
     *
     * Suitable for configurations or settings where only the language names and codes are needed.
     *
     * @return array with the format: ["language-code" => "language-name", ...]
     * @see get_available_languages()
     */
    public static function get_available_languages_as_key_string_array(): array
    {
        $availableLanguages = self::get_available_languages();
        $arr = [];
        foreach ($availableLanguages as $lang) {
            /**
             * @var language $lang
             */
            $arr[$lang->code] = $lang->name;
        }
        return $arr;
    }

    /**
     * Returns the list of enabled languages.
     *
     * Site administrators can change the list of enabled languages in the H5P settings.
     *
     * @return array with the format: ["language-code" => language, ...]
     * @see language
     * @see get_available_languages()
     */
    public static function get_enabled_languages(): array
    {
        global $CFG;
        $availableLanguages = self::get_available_languages();
        $enabledLangCodes = explode(',', $CFG->h5p_languageplugin_languages);
        $enabledLanguages = [];
        foreach ($enabledLangCodes as $code) {
            if (empty($code) || empty($availableLanguages[$code])) {
                continue;
            }
            $enabledLanguages[$code] = $availableLanguages[$code];
        }
        return $enabledLanguages;
    }


    /**
     * Returns the list of enabled languages as an array that can be used by CKEditor.
     *
     * Site administrators can change the list of enabled languages in the H5P settings.
     *
     * @return array with the format: ["language-code:language-name:[ltr/rtl]", ...]
     */
    public static function get_enabled_languages_as_ckeditor_array(): array
    {
        $enabledLanguages = self::get_enabled_languages();
        $arr = [];
        foreach ($enabledLanguages as $lang) {
            /**
             * @var language $lang
             */
            $arr[] = "$lang->code:$lang->name:" . ($lang->rtl ? 'rtl' : 'ltr');
        }
        return $arr;
    }
}
