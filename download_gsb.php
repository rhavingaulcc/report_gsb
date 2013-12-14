<?php

// This file is part of GSB module for Moodle - http://moodle.org/
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
 * Version info for GSB Report
 *
 * @package    report
 * @subpackage GSB
 * @copyright  2013 onwards Richard Havinga 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../config.php');
require_once (dirname(__FILE__) . '/../../lib/adminlib.php');

defined('MOODLE_INTERNAL') || die;

require_login();


$context = context_system::instance();
require_capability('report/gsb:viewmygsbreport', $context);


function objectToArray($select) {
		if (is_object($select)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$select = get_object_vars($select);
		}
 
		if (is_array($select)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $select);
		}
		else {
			// Return array
			return $select;
		}
	}
	
$sql = "SELECT bgc.id, cc.name as category, c.fullname as coursename, c.shortname, bgc.linksnum AS resources, bgc.assignmentnum,
bgc.feedbacknum, bgc.questnum, bgc.quiznum, bgc.interactnum as interactive_learning_objects, bgc.embednum as embedded_videos,
bgc.booknum, bgc.databasenum, bgc.workshopnum, bgc.choicenum, bgc.glossarynum,
bgc.wikinum, bgc.chatnum, bgc.forumnum, bgc.foldersnum, bgc.urlsnum, bgc.gsb
FROM {block_gsb} bgc
JOIN {course} c ON bgc.ids = c.id
JOIN {course_categories} cc ON c.category = cc.id
ORDER by name ASC;";
$select = $DB->get_records_sql($sql);

$array = objectToArray($select);	


header("Content-type: text//octet-stream"); 
header("Content-Disposition: attachment; filename=gsb_report.xls"); 
$flag = false; 

foreach($array as $row) { if(!$flag) {
 // display field/column names as first row 
 echo implode("\t", array_keys($row)) . "\r\n"; $flag = true; 
 
 }
 echo implode("\t", array_values($row)) . "\r\n"; } exit;

