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
 * @copyright  2012 onwards Richard Havinga richard.havinga@southampton-city.ac.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(dirname(__FILE__) . '/../../config.php');
require_once (dirname(__FILE__) . '/../../lib/adminlib.php');

defined('MOODLE_INTERNAL') || die;

require_login();

$context = get_context_instance(CONTEXT_SYSTEM);
require_capability('report/gsb:viewmygsbreport', $context);

global $DB, $CFG;
$dbman = $DB->get_manager(); 

admin_externalpage_setup('report_gsb');
echo $OUTPUT->header().
     $OUTPUT->heading(get_string('gsbdepartment', 'report_gsb'));
	 
$config = get_config('gsb');



//Bronze Settings

$boptional = $config->bronzenumoptional;
$bresourcetype = $config->bronzeresourcestype;
$bresources = $config->bronzeresources;
$bassignmentstype = $config->bronzeassignmentstype;
$bassignments = $config->bronzeassignments;
$bfeedbacktype = $config->bronzefeedbacktype;
$bfeedback = $config->bronzefeedback;
$bimstype = $config->bronzeimstype;
$bims = $config->bronzeims;
$bquesttype = $config->bronzequesttype;
$bquest = $config->bronzequest;
$bquiztype = $config->bronzequiztype;
$bquiz = $config->bronzequiz;
$bembedtype = $config->bronzeembedtype;
$bembed = $config->bronzeembed;
$bchattype = $config->bronzechattype;
$bchat = $config->bronzechat;
$bforumtype = $config->bronzeforumtype;
$bforum = $config->bronzeforum;
$bwikitype = $config->bronzewikitype;
$bwiki = $config->bronzewiki;
$bbooktype = $config->bronzebooktype;
$bbook = $config->bronzebook;
$bdatabasetype = $config->bronzedatabasetype;
$bdatabase = $config->bronzedatabase;
$bworkshoptype = $config->bronzeworkshoptype;
$bworkshop = $config->bronzeworkshop;
$bchoicetype = $config->bronzechoicetype;
$bchoice = $config->bronzechoice;
$bglossarytype = $config->bronzeglossarytype;
$bglossary = $config->bronzeglossary;
		
//Silver Settings

$soptional = $config->silvernumoptional;
$sresourcetype = $config->silverresourcestype;
$sresources = $config->silverresources;
$sassignmentstype = $config->silverassignmentstype;
$sassignments = $config->silverassignments;
$sfeedbacktype = $config->silverfeedbacktype;
$sfeedback = $config->silverfeedback;
$simstype = $config->silverimstype;
$sims = $config->silverims;
$squesttype = $config->silverquesttype;
$squest = $config->silverquest;
$squiztype = $config->silverquiztype;
$squiz = $config->silverquiz;
$sembedtype = $config->silverembedtype;
$sembed = $config->silverembed;
$schattype = $config->silverchattype;
$schat = $config->silverchat;
$sforumtype = $config->silverforumtype;
$sforum = $config->silverforum;
$swikitype = $config->silverwikitype;
$swiki = $config->silverwiki;
$sbooktype = $config->silverbooktype;
$sbook = $config->silverbook;
$sdatabasetype = $config->silverdatabasetype;
$sdatabase = $config->silverdatabase;
$sworkshoptype = $config->silverworkshoptype;
$sworkshop = $config->silverworkshop;
$schoicetype = $config->silverchoicetype;
$schoice = $config->silverchoice;
$sglossarytype = $config->silverglossarytype;
$sglossary = $config->silverglossary;

//Gold Settings

$goptional = $config->goldnumoptional;
$gresourcetype = $config->goldresourcestype;
$gresources = $config->goldresources;
$gassignmentstype = $config->goldassignmentstype;
$gassignments = $config->goldassignments;
$gfeedbacktype = $config->goldfeedbacktype;
$gfeedback = $config->goldfeedback;
$gimstype = $config->goldimstype;
$gims = $config->goldims;
$gquesttype = $config->goldquesttype;
$gquest = $config->goldquest;
$gquiztype = $config->goldquiztype;
$gquiz = $config->goldquiz;
$gembedtype = $config->goldembedtype;
$gembed = $config->goldembed;
$gchattype = $config->goldchattype;
$gchat = $config->goldchat;
$gforumtype = $config->goldforumtype;
$gforum = $config->goldforum;
$gwikitype = $config->goldwikitype;
$gwiki = $config->goldwiki;
$gbooktype = $config->goldbooktype;
$gbook = $config->goldbook;
$gdatabasetype = $config->golddatabasetype;
$gdatabase = $config->golddatabase;
$gworkshoptype = $config->goldworkshoptype;
$gworkshop = $config->goldworkshop;
$gchoicetype = $config->goldchoicetype;
$gchoice = $config->goldchoice;
$gglossarytype = $config->goldglossarytype;
$gglossary = $config->goldglossary;

$categoryid = $_POST['dept'];

$sql = "SELECT id, name FROM {course_categories} WHERE id = $categoryid;"; 
$getdeptcodes = $DB->get_records_sql($sql);

foreach($getdeptcodes as $row => $values) {
	$deptname = $values->name;
}

$sql = "SELECT DISTINCT {course}.id
FROM {user} INNER JOIN (({role_assignments} INNER JOIN {context} ON {role_assignments}.contextid = {context}.id) INNER JOIN ({course} INNER JOIN {course_categories} ON {course}.category = {course_categories}.id) ON {context}.instanceid = {course}.id) ON {user}.id = {role_assignments}.userid 
WHERE category = $categoryid";
$getcourseids = $DB->get_records_sql($sql);

echo "</br>";

foreach($getcourseids as $row => $values) {

	$courseid1 = $values->id;
	$table = "block_gsb";
	$conditions = array('ids'=>"$courseid1");
	$test = $DB->record_exists($table, $conditions); 

	if ($test<1) {
	
		$record = new object();
		$record->ids = "$courseid1";
		$record->assignmentnum = 0;
		$record->chatnum = 0;
		$record->feedbacknum = 0;
		$record->forumnum = 0;
		$record->questnum = 0;
		$record->quiznum = 0;
		$record->wikinum = 0;
		$record->linksnum = 0;
		$record->interactnum = 0;
		$record->booknum = 0;
		$record->databasenum = 0;
		$record->workshopnum = 0;
		$record->choicenum = 0;
		$record->glossarynum = 0;
		$record->embednum = 0;
		$record->gsb = "";
		$record->gsboverride = "no";
		$record->enrolnum = 0;
		$insert_gsb_row = $DB->insert_record('block_gsb', $record);		

	}
}

echo "<h1><font face='Arial'>$deptname</font></h1>";
	
echo "<font face='Arial'>The table below contains the courses from the $deptname category.<br /><br />The 'Current GSB Score' reflects what is currently recorded for each course in the database. This was updated last time the GSB medals were processed. The courses have been automatically weighed and the 'Auto Calculated GSB' column shows the new medals. Please use the course links below to moderate the courses and if you don't agree with the auto calculated gsb score use the 'Override GSB' column to override the medal.<br/><br/>The 'Auto Calculated GSB' column will be used to update each course medal unless you choose to override the medal.<br/><br/>Press the 'Process GSB Medals' button below to update the medals.</font>";
		
echo "<br /><br />";
	
echo "<form method='post' action='$CFG->wwwroot/report/gsb/index.php' name='gsb_process_form'><br><br><input type='submit' name='submit2' value='Process GSB Medals'></font></p><br>";
	
echo"<table border='1' cellspacing='0' cellpadding='2' width='100%'>
		<tr>
			<td bgcolor='#C0C0C0'><b><font face='Arial' size='3'>ID</font></b></td>
			<td bgcolor='#C0C0C0'><b><font face='Arial' size='3'>Shortname</font></b></td>
			<td bgcolor='#C0C0C0'><b><font face='Arial' size='3'>Course name (click name to visit course)</font></b></td>
			<td bgcolor='#C0C0C0'><b><font face='Arial' size='3'>Current GSB Score</font></b></td>
			<td bgcolor='#C0C0C0'><b><font face='Arial' size='3'>Auto Calculated GSB</b></font></b></td>
			<td bgcolor='#C0C0C0' width='120'><b><font face='Arial' size='3'>Override GSB</b></font></b></td>
			<td bgcolor='#C0C0C0' width='120'><b><font face='Arial' size='3'>Manual Medal</b></font></b></td>
		</tr>";
	
$sql = "SELECT {block_gsb}.id AS gb, {course}.id, {course}.shortname, {course}.fullname, {block_gsb}.gsb, {block_gsb}.enrolnum, {block_gsb}.gsboverride
		FROM  {course} INNER JOIN {block_gsb} ON {course}.id = {block_gsb}.ids
		WHERE ((({course}.category)=$categoryid))
		ORDER BY {course}.id;";
		
$get_dept_codes = $DB->get_records_sql($sql);

foreach($get_dept_codes as $row => $values) {

	$courseid = $values->id;		
	$gsbid = $values->gb;		
	$courseshortname = $values->shortname;		
	$coursefullname = $values->fullname;		
	$old_gsb_score = $values->gsb;		
	$gsboverride = $values->gsboverride;		

	if ($old_gsb_score == "") $old_gsb_score = "";
	else $old_gsb_score = $old_gsb_score;
			
			
	//selecting the context id for enrolments. This then can be used to search the number of course enrolments. 
	$level = '50';
	$sql = "SELECT {context}.id FROM  {context}	WHERE {context}.contextlevel = '$level' AND {context}.instanceid = '$courseid'";
	$context = $DB->get_records_sql($sql);
	if(isset($updgsb)){
	}else{
	$updgsb = new stdClass(); 
	}
	foreach($context as $row => $values) {
	
		$contextid = $values->id;	

		$enrolnum =  $DB->count_records('role_assignments', array('contextid'=>$contextid));

		$updgsb->id = $gsbid;
		$updgsb->enrolnum = $enrolnum;
		if ($DB->record_exists('block_gsb', array('id' => $updgsb->id))) {
		$DB->update_record('block_gsb', $updgsb); 
		}
 

	}
		
	//Stats Inserting based upon standard activity types
	$updgsb->id = $gsbid;
		
	//Number of Resources 
	
	$linksnum =  $DB->count_records('resource', array('course'=>$courseid));

	//Number of files in labels
	
	$labelfilenum = $DB->get_records_sql("SELECT {label}.id FROM {label} WHERE course = '$courseid' AND (intro LIKE '%@@PLUGINFILE@@%' )");
	$labelfilenum = count($labelfilenum);
		 
	//Number of files in web pages
	
	$pagefilenum = $DB->get_records_sql("SELECT {page}.id FROM {page} WHERE course = '$courseid' AND (content LIKE '%@@PLUGINFILE@@%' )");
	$pagefilenum = count($pagefilenum);
	
	//Number of files in books
	
	if ($dbman->table_exists('book_chapters')) {
	
		$bookfilenum = $DB->get_records_sql("SELECT {book_chapters}.id FROM {book_chapters} INNER JOIN {book} ON {book_chapters}.bookid = {book}.id WHERE {book}.course = '$courseid' AND (content LIKE '%@@PLUGINFILE@@%' )");
		$bookfilenum = count($bookfilenum);

	}
	
	$linksnum = $linksnum + $bookfilenum + $labelfilenum + $pagefilenum;
	$updgsb->linksnum = $linksnum;

	//Number of Standard Assignments
	//Change for Moodle 2.3
	$assignmentnum1 =  $DB->count_records('assignment', array('course'=>$courseid));
	if ($dbman->table_exists('assign')) {
		$assignmentnum2 =  $DB->count_records('assign', array('course'=>$courseid));
	}else{
		$assignmentnum2 = 0;
	}
	$assignmentnum=$assignmentnum1 + $assignmentnum2;
	$updgsb->assignmentnum = $assignmentnum;

	$updgsb->assignmentnum = $assignmentnum;
	
	//Number of Feedback Activities
	
	$feedbacknum =  $DB->count_records('feedback', array('course'=>$courseid));
	$updgsb->feedbacknum = $feedbacknum;
	
	//Number of IMS packages
	
	$interactnum =  $DB->count_records('imscp', array('course'=>$courseid));
	$updgsb->interactnum = $interactnum;

	//Number of Questionnaires
	if ($dbman->table_exists('questionnaire')) {
	
		$questnum =  $DB->count_records('questionnaire', array('course'=>$courseid));
		$updgsb->questnum = $questnum;
		
	}
	//Number of Quiz
	
	$quiznum =  $DB->count_records('quiz', array('course'=>$courseid));
	$updgsb->quiznum = $quiznum;
		
	//Number of embedded Videos search by "embed" or "iframe" on a main page
	
	$embed1num = $DB->get_records_sql("SELECT {label}.id FROM {label} WHERE course = '$courseid' AND (intro LIKE '%iframe%' OR intro LIKE '%embed%')");
	$embed1num = count($embed1num);

	//Number of embedded Videos search by "embed" or "iframe" on a web page
	
	$embedpagenum = $DB->get_records_sql("SELECT {page}.id FROM {page} WHERE course = '$courseid' AND (content LIKE '%iframe%' OR intro LIKE '%embed%')");
	$embedpagenum = count($embedpagenum);
	
	//number of Videos in a Book
	
	if ($dbman->table_exists('book_chapters')) {
	
		$bookvidnum = $DB->get_records_sql("SELECT {book_chapters}.id FROM {book_chapters} INNER JOIN {book} ON {book_chapters}.bookid = {book}.id WHERE {book}.course = '$courseid' AND (content LIKE '%embed%' OR intro LIKE '%iframe%')");
		$bookvidnum = count($bookvidnum);
		
	}
	
	$embednum = $embed1num + $bookvidnum + $embedpagenum;
	$updgsb->embednum = $embednum;	
		
	//Number of Chat Activities
	
	$chatnum =  $DB->count_records('chat', array('course'=>$courseid));
	$updgsb->chatnum = $chatnum;	
		
	//Number of Forums

	$forumnum =  $DB->count_records('forum', array('course'=>$courseid));
	$updgsb->forumnum = $forumnum;	
	
	//Number of Wikis
	
	$wikinum =  $DB->count_records('wiki', array('course'=>$courseid));
	$updgsb->wikinum = $wikinum;		
	
	//Number of Books
	if ($dbman->table_exists('book')) {
	
		$booknum =  $DB->count_records('book', array('course'=>$courseid));
		$updgsb->booknum = $booknum;			
	
	}
	//Number of Databases
	if ($dbman->table_exists('data')) {
	
		$databasenum =  $DB->count_records('data', array('course'=>$courseid));
		$updgsb->databasenum = $databasenum;			
	
	}
	
	//Number of Workshops
	if ($dbman->table_exists('workshop')) {
	
		$workshopnum =  $DB->count_records('workshop', array('course'=>$courseid));
		$updgsb->workshopnum = $workshopnum;			
	
	}
	
	//Number of Choice Activities
	if ($dbman->table_exists('choice')) {
	
		$choicenum =  $DB->count_records('choice', array('course'=>$courseid));
		$updgsb->choicenum = $choicenum;			
	
	}
	
	//Number of Glossaries
	if ($dbman->table_exists('glossary')) {
	
		$glossarynum =  $DB->count_records('glossary', array('course'=>$courseid));
		$updgsb->glossarynum = $glossarynum;			
	
	}
	
	//TODO: Add button to process all Medals onto index.php in report. 
	//Change images of medals to look more professional
	if ($DB->record_exists('block_gsb', array('id' => $updgsb->id))) {
	
		$DB->update_record('block_gsb', $updgsb); 
		
	} 	

		
	$nostudent = $DB->get_record_sql("SELECT c.id, COUNT(ra.userid) AS students 
									FROM {course} c LEFT OUTER JOIN {context} cx ON c.id = cx.instanceid 
									LEFT OUTER JOIN {role_assignments} ra ON cx.id = ra.contextid 
									AND ra.roleid = '5' 
									WHERE cx.contextlevel = '50' AND c.id = $courseid
									GROUP BY c.id");


	//Average Student Views per course	
	$studentviewsobj = $DB->get_record_sql("SELECT (count(l.userid)) AS Views
										 FROM {log} l, {user} u, {role_assignments} r
										 WHERE l.course=$courseid
										 AND l.userid = u.id
										 AND r.contextid= (
										 SELECT id
										 FROM {context}
										 WHERE contextlevel=50 AND instanceid=l.course
										 )AND r.roleid=5
										 AND r.userid = u.id");
	

	if($nostudent->students>0){
	$studentviews = round($studentviewsobj->views / $nostudent->students);
	}else{
	$studentviews = 0;
	}
	
	if($config->studentviews > $studentviews) {

		$gsb_score = "";
		
	} elseif($config->minenrolments >= $enrolnum) {

		$gsb_score = "";
		
	} else {

		$bop_count = 0;
		$break = 0;
		
		if($bresourcetype == 'optional') {
			if($linksnum >= $bresources) $bop_count ++;
		} else {
			if($bresourcetype == 'mandatory') {
				if($linksnum < $bresources) $break ++;
			}
		}
			
		if($bassignmentstype == 'optional') {
			if($assignmentnum >= $bassignments) $bop_count ++;
		} else {
			if($bassignmentstype == 'mandatory') {
				if($assignmentnum < $bassignments) $break ++;
			}
		}
			
		if($bfeedbacktype == 'optional') {
			if($feedbacknum >= $bfeedback) $bop_count ++;
		} else {
			if($bfeedbacktype == 'mandatory') {
				if($feedbacknum < $bfeedback) $break ++;
			}
		}
			
		if($bimstype == 'optional') {
			if($interactnum >= $bims) $bop_count ++;
		} else {
			if($bimstype == 'mandatory') {
				if($interactnum < $bims) $break ++;
			}
		}
			
		if($bquesttype == 'optional') {
			if($questnum >= $bquest) $bop_count ++;
		} else {
			if($bquesttype == 'mandatory') {
				if($questnum < $bquest) $break ++;
			}
		}
			
		if($bquiztype == 'optional') {
			if($quiznum >= $bquiz) $bop_count ++;
		} else {
			if($bquiztype == 'mandatory') {
				if($quiznum < $bquiz) $break ++;
			}
		}
			
		if($bembedtype == 'optional') {
			if($embednum >= $bembed) $bop_count ++;
		} else {
			if($bembedtype == 'mandatory') {
				if($embednum < $bembed) $break ++;
			}
		}
			
		if($bchattype == 'optional') {
			if($chatnum >= $bchat) $bop_count ++;
		} else {
			if($bchattype == 'mandatory') {
				if($chatnum < $bchat) $break ++;
			}
		}
			
		if($bforumtype == 'optional') {
			if($forumnum >= $bforum) $bop_count ++;
		} else {
			if($bforumtype == 'mandatory') {
				if($forumnum < $bforum) $break ++;
			}
		}
		
		if($bwikitype == 'optional') {
			if($wikinum >= $bwiki) $bop_count ++;
		} else {
			if($bwikitype == 'mandatory') {
				if($wikinum < $bwiki) $break ++;
			}
		}
			
		if($bbooktype == 'optional') {
			if($booknum >= $bbook) $bop_count ++;
		} else {
			if($bbooktype == 'mandatory') {
				if($booknum < $bbook) $break ++;
			}
		}
			
		if($bdatabasetype == 'optional') {
			if($databasenum >= $bdatabase) $bop_count ++;
		} else {
			if($bdatabasetype == 'mandatory') {
				if($databasenum < $bdatabase) $break ++;
			}
		}
		
		if($bworkshoptype == 'optional') {
			if($workshopnum >= $bworkshop) $bop_count ++;
		} else {
			if($bworkshoptype == 'mandatory') {
				if($workshopnum < $bworkshop) $break ++;
			}
		}
		
		if($bchoicetype == 'optional') {
			if($choicenum >= $bchoice) $bop_count ++;
		} else {
			if($bchoicetype == 'mandatory') {
				if($choicenum < $bchoice) $break ++;
			}
		}
		
		if($bglossarytype == 'optional') {
			if($glossarynum >= $bglossary) $bop_count ++;
		} else {
			if($bglossarytype == 'mandatory') {
				if($glossarynum < $bglossary) $break ++;
			}
		}

		if(($bop_count >= $config->bronzenumoptional) && ($break < 1)) {
			$gsb_bronze = 1;
			$gsb_score = "Bronze";
		} else {
			$gsb_bronze = 0;
			$gsb_score = "";
		}
		$sop_count = 0;
		$break = 0;
		
		if($gsb_bronze == 1) {
		
			if($sresourcetype == 'optional') {
				if($linksnum >= $sresources) $sop_count ++;
			} else {
				if($sresourcetype == 'mandatory') {
					if($linksnum < $sresources) $break ++;
				}
			}
		
			if($sassignmentstype == 'optional') {
				if($assignmentnum >= $sassignments) $sop_count ++;
			} else {
				if($sassignmentstype == 'mandatory') {
					if($assignmentnum < $sassignments) $break ++;
				}
			}
		
			if($sfeedbacktype == 'optional') {
				if($feedbacknum >= $sfeedback) $sop_count ++;
			} else {
				if($sfeedbacktype == 'mandatory') {
					if($feedbacknum < $sfeedback) $break ++;
				}
			}
		
			if($simstype == 'optional') {
				if($interactnum >= $sims) $sop_count ++;
			} else {
				if($simstype == 'mandatory') {
					if($interactnum < $sims) $break ++;
				}
			}
		
			if($squesttype == 'optional') {
				if($questnum >= $squest) $sop_count ++;
			} else {
				if($squesttype == 'mandatory') {
					if($questnum < $squest) $break ++;
				}
			}
		
		
			if($squiztype == 'optional') {
				if($quiznum >= $squiz) $sop_count ++;
			} else {
				if($squiztype == 'mandatory') {
					if($quiznum < $squiz) $break ++;
				}
			}
		
			if($sembedtype == 'optional') {
				if($embednum >= $sembed) $sop_count ++;
			} else {
				if($sembedtype == 'mandatory') {
					if($embednum < $sembed) $break ++;
				}
			}
		
			if($schattype == 'optional') {
				if($chatnum >= $schat) $sop_count ++;
			} else {
				if($schattype == 'mandatory') {
					if($chatnum < $schat) $break ++;
				}
			}
		
			if($sforumtype == 'optional') {
				if($forumnum >= $sforum) $sop_count ++;
			} else {
				if($sforumtype == 'mandatory') {
					if($forumnum < $sforum) $break ++;
				}
			}
			
			if($swikitype == 'optional') {
				if($wikinum >= $swiki) $sop_count ++;
			} else {
				if($swikitype == 'mandatory') {
					if($wikinum < $swiki) $break ++;
				}
			}
			
			if($sbooktype == 'optional') {
				if($booknum >= $sbook) $sop_count ++;
			} else {
				if($sbooktype == 'mandatory') {
					if($booknum < $sbook) $break ++;
				}
			}
			
			if($sdatabasetype == 'optional') {
				if($databasenum >= $sdatabase) $sop_count ++;
			} else {
				if($sdatabasetype == 'mandatory') {
				if($databasenum < $sdatabase) $break ++;
				}
			}
		
			if($sworkshoptype == 'optional') {
				if($workshopnum >= $sworkshop) $sop_count ++;
			} else {
				if($sworkshoptype == 'mandatory') {
					if($workshopnum < $sworkshop) $break ++;
				}
			}
			
			if($schoicetype == 'optional') {
				if($choicenum >= $schoice) $sop_count ++;
			} else {
				if($schoicetype == 'mandatory') {
					if($choicenum < $schoice) $break ++;
				}
			}
			
			if($sglossarytype == 'optional') {
				if($glossarynum >= $sglossary) $sop_count ++;
			} else {
				if($sglossarytype == 'mandatory') {
					if($glossarynum < $sglossary) $break ++;
				}
			}
		}
		
		if(($sop_count >= $config->silvernumoptional) && ($break < 1)) {
			$gsb_silver = 10;
			$gsb_score = "Silver";
		} else {
			$gsb_silver = 0;
			$gsb_score = "";
		}
		
		$gop_count = 0;
		$break = 0;	
			
		if($gsb_silver == 10) {

			if($gresourcetype == 'optional') {
				if($linksnum >= $gresources) $gop_count ++;
			} else {
				if($gresourcetype == 'mandatory') {
					if($linksnum < $gresources) $break ++;
				}
			}
		
			if($gassignmentstype == 'optional') {
				if($assignmentnum >= $gassignments) $gop_count ++;
			} else {
				if($gassignmentstype == 'mandatory') {
					if($assignmentnum < $gassignments) $break ++;
				}
			}
		
			if($gfeedbacktype == 'optional') {
				if($feedbacknum >= $gfeedback) $gop_count ++;
			} else {
				if($gfeedbacktype == 'mandatory') {
					if($feedbacknum < $gfeedback) $break ++;
				}
			}
		
			if($gimstype == 'optional') {
				if($interactnum >= $gims) $gop_count ++;
			} else {
				if($gimstype == 'mandatory') {
					if($interactnum < $gims) $break ++;
				}
			}
		
			if($gquesttype == 'optional') {
				if($questnum >= $gquest) $gop_count ++;
			} else {
				if($gquesttype == 'mandatory') {
					if($questnum < $gquest) $break ++;
				}
			}
		
		
			if($gquiztype == 'optional') {
				if($quiznum >= $gquiz) $gop_count ++;
			} else {
				if($gquiztype == 'mandatory') {
					if($quiznum < $gquiz) $break ++;
				}
			}
		
			if($gembedtype == 'optional') {
				if($embednum >= $gembed) $gop_count ++;
			} else {
				if($gembedtype == 'mandatory') {
					if($embednum < $gembed) $break ++;
				}
			}
		
			if($gchattype == 'optional') {
				if($chatnum >= $gchat) $gop_count ++;
			} else {
				if($gchattype == 'mandatory') {
					if($chatnum < $gchat) $break ++;
				}
			}
		
			if($gforumtype == 'optional') {
				if($forumnum >= $gforum) $gop_count ++;
			} else {
				if($gforumtype == 'mandatory') {
					if($forumnum < $gforum) $break ++;
				}
			}
			
			if($gwikitype == 'optional') {
				if($wikinum >= $gwiki) $gop_count ++;
			} else {
				if($gwikitype == 'mandatory') {
					if($wikinum < $gwiki) $break ++;
				}
			}
			
			if($gbooktype == 'optional') {
				if($booknum >= $gbook) $gop_count ++;
			} else {
				if($gbooktype == 'mandatory') {
					if($booknum < $gbook) $break ++;
				}
			}
			
			if($gdatabasetype == 'optional') {
				if($databasenum >= $gdatabase) $gop_count ++;
			} else {
				if($gdatabasetype == 'mandatory') {
					if($databasenum < $gdatabase) $break ++;
				}
			}
		
			if($gworkshoptype == 'optional') {
				if($workshopnum >= $gworkshop) $gop_count ++;
			} else {
				if($gworkshoptype == 'mandatory') {
					if($workshopnum < $gworkshop) $break ++;
				}
			}
			
			if($gchoicetype == 'optional') {
				if($choicenum >= $gchoice) $gop_count ++;
			} else {
				if($gchoicetype == 'mandatory') {
					if($choicenum < $gchoice) $break ++;
				}
			}
			
			if($gglossarytype == 'optional') {
				if($glossarynum >= $gglossary) $gop_count ++;
			} else {
				if($gglossarytype == 'mandatory') {
					if($glossarynum < $gglossary) $break ++;
				}
			}
		}
		
		if(($gop_count >= $config->goldnumoptional) && ($break < 1)) {
			$gsb_gold = 100;
			$gsb_score = "Gold";
		} else {
			$gsb_gold = 0;
			$gsb_score = "";
		}

		$gsb = $gsb_bronze + $gsb_silver + $gsb_gold;
		if ($gsb == 111) $gsb_score = "Gold";
		else if ($gsb == 11) $gsb_score = "Silver";
		else if ($gsb == 1) $gsb_score = "Bronze";
		else if ($gsb == 101) $gsb_score = "Bronze";
		else $gsb_score = "&nbsp;";
				
	}				
	echo   "<tr>				
				<td><font face='Arial' size='2'>$gsbid</font></td>
				<td><font face='Arial' size='2'>$courseshortname</font></td>
				<td><font face='Arial' size='2'><a target='_blank' title='Click to enter this course' href='$CFG->wwwroot/course/view.php?id=$courseid'>$coursefullname</a></font></td>
				<td><font face='Arial' size='2'>$old_gsb_score</font></td>
				<td><font face='Arial' size='2'>$gsb_score</font></td>
				<td width='120'>
					
				<select size='1' name='gsb[$courseid][override]' style='font-family: Arial; font-size: 10pt; width: 120'>
					<option></option>
					<option value='Gold'>Gold</option>
					<option value='Silver'>Silver</option>
					<option value='Bronze'>Bronze</option>
					<option value='In Dev'>In Dev</option>
					<option value='exclude'>Exclude</option>
					<option value='remove'>Remove Over Ride</option>
				</select></td>
				<td><font face='Arial' size='2'>$gsboverride</font></td></tr>

				<input type='hidden' name='gsb[$courseid][prev]' value=$old_gsb_score>
				<input type='hidden' name='gsb[$courseid][current]' value='$gsb_score'>
				<input type='hidden' name='courseid' value=$courseid>
				<input type='hidden' name='gsb[$courseid][gsbid]' value=$gsbid>
				<input type='hidden' name='categoryid' value=$categoryid>
				<input type='hidden' name='gsb[$courseid][curentover]' value=$gsboverride>
				";									
}
		
echo "<input type='hidden' name='course' value='$deptname'></form></table>";
echo $OUTPUT->footer();
?>