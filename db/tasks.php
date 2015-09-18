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
 * Local plugin "wsPeoplesoft Centuria" - Scheduled Tasks
 *
 * @package     local
 * @subpackage  local_wspeoplesoft
 * @copyright   2015 Jair Revilla, ATYPAX SAC <jair@atypax.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$tasks = array(
    array(
        'classname' => 'wspeoplesoft\classes\task\apply_update',
        'blocking' => 1,
        'minute' => '0',
        'hour' => '1',
        'day' => '*',
        'dayofweek' => '0',
        'month' => '*',
        'disabled' => 1
    ),
);
