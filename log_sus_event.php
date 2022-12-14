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
 * Version information for the quizaccess_sentry plugin.
 *
 * @package   quizaccess_sentry
 * @copyright 2022 Riasat Mahbub <riasat.mahbub@brainstation-23.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../../config.php');

function quizaccess_sentry_log_sus_event($event_type, $userid, $courseid, $quizid, $timecaught){
    global $DB;

    $recordtoinsert = new stdClass();
    $recordtoinsert->event_type = $event_type;
    $recordtoinsert->userid = $userid;
    $recordtoinsert->quizid = $quizid;
    $recordtoinsert->courseid = $courseid;
    $recordtoinsert->timecaught = $timecaught;
    
    $DB->insert_record('sus_events', $recordtoinsert);    
}