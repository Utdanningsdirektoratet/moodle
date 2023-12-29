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
 * H5P: Language for CKEditor Language Plugin.
 *
 * @package    core_h5p
 * @copyright  2023 Audun Lillekjendlie <audun.jorstad.lillekjendlie@udir.no>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core_h5p\local\langplugin;

class language
{
    /**
     * @var string Language code.
     */
    public string $code;
    /**
     * @var string Language name.
     */
    public string $name;
    /**
     * @var bool Language direction is right to left.
     */
    public bool $rtl;


    /**
     * Constructor.
     *
     * @param string $code Language code.
     * @param string $name Language name.
     * @param bool $rtl Language direction is right to left (default false).
     */
    public function __construct(string $code, string $name, bool $rtl = false)
    {
        $this->code = $code;
        $this->name = $name;
        $this->rtl = $rtl;
    }
}
