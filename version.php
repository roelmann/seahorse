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
 * Richard Oelmann's seahorse theme, an extension of the Moodle Core seahorse theme which builds on bootstrap as a parent
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   Moodle seahorse theme
 * @copyright 2013 Moodle, moodle.org
 * @copyright 2013 Richard Oelmann, editcons.net
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2013081802;
$plugin->requires  = 2013040500;
$plugin->component = 'theme_seahorse';
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = '0.8.2';
$plugin->dependencies = array(
    'theme_base'  => 2013050100,
);
