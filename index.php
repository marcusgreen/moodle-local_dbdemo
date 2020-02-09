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
 *
 * @package    local_dbdemo
 * @copyright  2020 Marcus Green
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
global $CFG, $PAGE;
require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir . '/formslib.php');

$PAGE->set_context(context_system::instance());
$PAGE->set_url('/local/dbdemo.php');
$filename = '';
class local_dbdemo_form extends moodleform {
    protected function definition() {
        global $DB,$USER;
        $mform = $this->_form;

        $mform->addElement('textarea','sql','SQL Query','wrap="virtual" rows="10" cols="50"');
        $mform->setType('demotext',PARAM_RAW);
        $this->add_action_buttons();
    }
}
$mform = new local_dbdemo_form();
echo $OUTPUT->header();
$mform->display();
echo $OUTPUT->footer();
if($data =$mform->get_data()){
    global $DB;
    $records = $DB->{"get_records"}('user');

    $result= $DB->$func;
    var_dump($data->sql);
    exit();
}
