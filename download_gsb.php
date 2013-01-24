<?php

//Written by Richard Havinga @ Southampton City College

require_once(dirname(__FILE__) . '/../../config.php');
require_once (dirname(__FILE__) . '/../../lib/adminlib.php');

defined('MOODLE_INTERNAL') || die;

require_login();


$context = get_context_instance(CONTEXT_SYSTEM);
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
	
$sql = "SELECT {block_gsb}.id, {course_categories}.name as category, {course}.fullname as coursename, {course}.shortname, {block_gsb}.linksnum, {block_gsb}.assignmentnum, 
		{block_gsb}.feedbacknum, {block_gsb}.questnum, {block_gsb}.quiznum, {block_gsb}.interactnum as interactive_learning_objects, {block_gsb}.embednum as embedded_videos, 
		{block_gsb}.booknum, {block_gsb}.databasenum, {block_gsb}.workshopnum, {block_gsb}.choicenum, {block_gsb}.glossarynum, 
		{block_gsb}.wikinum, {block_gsb}.chatnum, {block_gsb}.forumnum, {block_gsb}.gsb 
		FROM ({block_gsb} INNER JOIN {course} ON {block_gsb}.ids = {course}.id) INNER JOIN {course_categories} ON {course}.category = {course_categories}.id
		ORDER by name ASC;"; 
		
//		Modification removal from $sql to satisfy SQL SERVER GROUP BY {block_gsb}.id		
$select = $DB->get_records_sql($sql);

$array = objectToArray($select);	

header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=gsb_report.xls"); 
$flag = false; foreach($array as $row) { if(!$flag) {
 // display field/column names as first row 
 echo implode("\t", array_keys($row)) . "\r\n"; $flag = true; } echo implode("\t", array_values($row)) . "\r\n"; } exit;

