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
 * Local plugin "sandbox" - Task definition
 *
 * @package     local
 * @subpackage  local_sandbox
 * @copyright   2014 Alexander Bias, University of Ulm <alexander.bias@uni-ulm.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace wspeoplesoft\task;

defined('MOODLE_INTERNAL') || die();

require_once(dirname(dirname(dirname(__FILE__))) . '/lib.php');

/**
 * The local_sandbox course restored event class.
 *
 * @package     local
 * @subpackage  local_sandbox
 * @copyright   2014 Alexander Bias, University of Ulm <alexander.bias@uni-ulm.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class apply_update extends \core\task\scheduled_task {

    /**
     * Return localised task name.
     *
     * @return string
     */
    public function get_name() {
        return get_string('taskrestorecourses');
    }


    /**
     * Execute scheduled task
     *
     * @return boolean
     */
    public function execute() {
        global $CFG, $DB;

        require_once($CFG->libdir.'/moodlelib.php');
        require_once($CFG->libdir.'/filestorage/zip_packer.php');
        require_once($CFG->dirroot.'/backup/util/includes/restore_includes.php');

        // Get plugin config
        //$local_sandbox_config = get_config('local_sandbox');

        // Counter for restored courses
        $count = 0;

        // Do only when sandbox directory is configured
        return true;
    }
}
