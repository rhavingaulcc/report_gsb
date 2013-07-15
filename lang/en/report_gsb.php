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


$string['pluginname'] = 'GSB Medals';
$string['gsb:viewmygsbreport'] = 'View the Gold, Silver, Bronze Course Medal';
$string['gsbadmin'] = 'GSB Report';
$string['gsbdepartment'] = 'Gold, Silver, Bronze Moderation Page';
$string['title'] = 'title';
$string['subcategories'] = 'Include Sub Categories';
$string['subcategoriesxp'] = 'Do you want to include sub categories when awarding medals?';
$string['automedal'] = 'Automatic Awards';
$string['automedalxp'] = 'Do you want to automatically award auto calculated medals when a teacher or administrator enters a course';
$string['studentviews'] = 'Average User Views';
$string['studentviewsxp'] = 'The minimum average user views before being able to have a calculated medal score. All courses without this criteria will be marked as in development';
$string['minenrolments'] = 'Minimum Number of enrolments';
$string['minenrolmentsxp'] = 'The minimum number of enrolments needed on a course before being able to have a calculated medal score. All courses without this criteria will be marked as in development';

//bronze settings --------------------------------------------------------------

$string['bronzenumoptional'] = "Optional Requirements";
$string['bronzenumoptionalxp'] = "This is the number of optional settings needed to be fulfilled before awarding this 
medal. Use this setting when benchmarking to a selection of a range of activities. Note: select only the minimum number of criteria.";
$string['bronze_heading'] = 'Configure Bronze Benchmarking';
$string['explaingeneralbronze'] = 'These are the settings used for the Bronze medal auto calculations.';

$string['configbronzelabels'] = 'Labels Criteria Type';
$string['configbronzelabelsxp'] = 'Define whether the minimum labels count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzelabels']= 'Number of Labels';
$string['configdefaultbronzelabels'] = 'Number of Labels required for Bronze if used.';

$string['configbronzelabelslogs'] = 'Label Activity';
$string['configbronzelabelsxplogs'] = 'The minimum average student views for Labels.';
$string['bronzelabelslogs']= 'Minimum Label Activity';
$string['configdefaultbronzelabelslogs'] = 'Minimum average activity for Labels required for Bronze if used.';

$string['configbronzefolders'] = 'Folders Criteria Type';
$string['configbronzefoldersxp'] = 'Define whether the minimum folders count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzefolders']= 'Number of Folders';
$string['configdefaultbronzefolders'] = 'Number of folders required for Bronze if used.';

$string['configbronzefolderslogs'] = 'Label Activity';
$string['configbronzefoldersxplogs'] = 'The minimum average student views before being able to have a calculated medal score. All courses without this criteria will be marked as in development';
$string['bronzefolderslogs']= 'Minimum Label Activity';
$string['configdefaultbronzefolderslogs'] = 'Minimum average activity for Folders required for Bronze if used.';

$string['configbronzeheadings'] = 'Headings Criteria Type';
$string['configbronzeheadingsxp'] = 'Define whether each section should have a defined header which isn\'t the default and should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeheadings']= 'Section Headings';
$string['configdefaultbronzeheadings'] = 'Whether each section should have a heading for Bronze.';

$string['configbronzeurls'] = 'URLs Criteria Type';
$string['configbronzeurlsxp'] = 'Define whether the minimum URLs count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeurls']= 'Number of URLss';
$string['configdefaultbronzeurls'] = 'Number of URLs required for Bronze if used.';

$string['configbronzeurlslogs'] = 'URL Activity';
$string['configbronzeurlsxplogs'] = 'The minimum average student views for URLs.';
$string['bronzeurlslogs']= 'Minimum URL Activity';
$string['configdefaultbronzeurlslogs'] = 'Minimum average activity for urls required for Bronze if used.';

$string['configbronzeresources'] = 'Resources Criteria Type';
$string['configbronzeresourcesxp'] = 'Define whether the minimum resources count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeresources']= 'Number of Resources';
$string['configdefaultbronzeresources'] = 'Number of resources required for Bronze if used. This is a total of documents within books, folders
labels, pages and on the main course page.';

$string['configbronzeassignments'] = 'Assignments Criteria Type';
$string['configbronzeassignmentsxp'] = 'Define whether the minimum number of assignments (Moodle and Turnitin) count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeassignments'] = 'Number of Assignments';
$string['configdefaultbronzeassignments'] = 'Number of assignments required for Bronze if used. This is the total of assignments within a course page.';

$string['configbronzeassignmentslogs'] = 'Assignment Activity';
$string['configbronzeassignmentsxplogs'] = 'The minimum average student activity for Assignments.';
$string['bronzeassignmentslogs']= 'Minimum Assignment Activity';
$string['configdefaultbronzeassignmentslogs'] = 'Minimum average activity for Assignments required for Bronze if used.';

$string['configbronzefeedback'] = 'Feedback Criteria Type';
$string['configbronzefeedbackxp'] = 'Define whether the minimum number of Feedback count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzefeedback'] = 'Number of Feedback Activities';
$string['configdefaultbronzefeedback'] = 'Number of Feedback activities required for Bronze if used.';

$string['configbronzefeedbacklogs'] = 'Feedback Activity';
$string['configbronzefeedbackxplogs'] = 'The minimum average student activity for Feedback activities.';
$string['bronzefeedbacklogs']= 'Minimum Feedback Activity';
$string['configdefaultbronzefeedbacklogs'] = 'Minimum average activity for Feedback activities required for Bronze if used.';

$string['configbronzeims'] = 'IMS package Criteria Type';
$string['configbronzeimsxp'] = 'Define whether the minimum number of IMS package count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeims'] = 'Number of IMS packages';
$string['configdefaultbronzeims'] = 'Number of IMS packages required for Bronze if used.';

$string['configbronzeimslogs'] = 'IMS Activity';
$string['configbronzeimsxplogs'] = 'The minimum average student activity for IMS activities.';
$string['bronzeimslogs']= 'Minimum Feedback Activity';
$string['configdefaultbronzeimslogs'] = 'Minimum average activity for IMS activities required for Bronze if used.';

$string['configbronzequest'] = 'Questionnaire Criteria Type';
$string['configbronzequestxp'] = 'Define whether the minimum number of questionnaire count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzequest'] = 'Number of Questionnaires';
$string['configdefaultbronzequest'] = 'Number of Questionnaires required for Bronze if used.';

$string['configbronzequestlogs'] = 'Questionnaire Activity';
$string['configbronzequestxplogs'] = 'The minimum average student activity for Questionnaire activities.';
$string['bronzequestlogs']= 'Minimum Questionnaire Activity';
$string['configdefaultbronzequestlogs'] = 'Minimum average activity for Questionnaire activities required for Bronze if used.';

$string['configbronzequiz'] = 'Quiz Criteria Type';
$string['configbronzequizxp'] = 'Define whether the minimum number of Quiz count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzequiz'] = 'Number of Quizzes';
$string['configdefaultbronzequiz'] = 'Number of Quizzes required for Bronze if used.';

$string['configbronzequizlogs'] = 'Quiz Activity';
$string['configbronzequizxplogs'] = 'The minimum average student activity for Quiz activities.';
$string['bronzequizlogs']= 'Minimum Quiz Activity';
$string['configdefaultbronzequizlogs'] = 'Minimum average activity for Quiz activities required for Bronze if used.';

$string['configbronzeembed'] = 'Embed Criteria Type';
$string['configbronzeembedxp'] = 'Define whether the minimum number of embedded videos count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeembed'] = 'Number of embedded videos';
$string['configdefaultbronzeembed'] = 'Number of embedded videos required for Bronze if used.';

$string['configbronzechat'] = 'Chat Criteria Type';
$string['configbronzechatxp'] = 'Define whether the minimum number of chat activity count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzechat'] = 'Number of Chat Activities';
$string['configdefaultbronzechat'] = 'Number of chat activities required for Bronze if used.';

$string['configbronzechatlogs'] = 'Chat Activity';
$string['configbronzechatxplogs'] = 'The minimum average student activity for Chat activities.';
$string['bronzechatlogs']= 'Minimum Chat Activity';
$string['configdefaultbronzechatlogs'] = 'Minimum average activity for Chat activities required for Bronze if used.';

$string['configbronzeforum'] = 'Forum Criteria Type';
$string['configbronzeforumxp'] = 'Define whether the minimum number of forum count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeforum'] = 'Number of Forums';
$string['configdefaultbronzeforum'] = 'Number of Forums required for Bronze if used.';

$string['configbronzeforumlogs'] = 'Forum Activity';
$string['configbronzeforumxplogs'] = 'The minimum average student activity for Forum activities.';
$string['bronzeforumlogs']= 'Minimum Forum Activity';
$string['configdefaultbronzeforumlogs'] = 'Minimum average activity for Forum activities required for Bronze if used.';

$string['configbronzewiki'] = 'Wiki Criteria Type';
$string['configbronzewikixp'] = 'Define whether the minimum number of Wiki\'s count should be excluded, mandatory or optional to this medal criteria.';
$string['bronzewiki'] = 'Number of Wiki Activities';
$string['configdefaultbronzewiki'] = 'Number of Wiki Activities required for Bronze if used.';

$string['configbronzewikilogs'] = 'Wiki Activity';
$string['configbronzewikixplogs'] = 'The minimum average student activity for Wiki activities.';
$string['bronzewikilogs']= 'Minimum Wiki Activity';
$string['configdefaultbronzewikilogs'] = 'Minimum average activity for Wiki activities required for Bronze if used.';

$string['configbronzebook'] = 'Book Criteria Type';
$string['configbronzebookxp'] = 'Define whether the minimum number of Books should be excluded, mandatory or optional to this medal criteria.';
$string['bronzebook'] = 'Number of Books';
$string['configdefaultbronzebook'] = 'Number of Books required for Bronze if used.';

$string['configbronzebooklogs'] = 'Book Activity';
$string['configbronzebookxplogs'] = 'The minimum average student activity for Book activities.';
$string['bronzebooklogs']= 'Minimum Book Activity';
$string['configdefaultbronzebooklogs'] = 'Minimum average activity for Book activities required for Bronze if used.';

$string['configbronzedatabase'] = 'Database Criteria Type';
$string['configbronzedatabasexp'] = 'Define whether the minimum number of databases should be excluded, mandatory or optional to this medal criteria.';
$string['bronzedatabase'] = 'Number of Databases';
$string['configdefaultbronzedatabase'] = 'Number of Databases required for Bronze if used.';

$string['configbronzedatabaselogs'] = 'Database Activity';
$string['configbronzedatabasexplogs'] = 'The minimum average student activity for database activities.';
$string['bronzedatabaselogs']= 'Minimum Database Activity';
$string['configdefaultbronzedatabaselogs'] = 'Minimum average activity for Database activities required for Bronze if used.';

$string['configbronzeworkshop'] = 'Workshop Criteria Type';
$string['configbronzeworkshopxp'] = 'Define whether the minimum number of workshops should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeworkshop'] = 'Number of Workshops';
$string['configdefaultbronzeworkshop'] = 'Number of Workshops required for Bronze if used.';

$string['configbronzeworkshoplogs'] = 'workshop Activity';
$string['configbronzeworkshopxplogs'] = 'The minimum average student activity for workshop activities.';
$string['bronzeworkshoplogs']= 'Minimum workshop Activity';
$string['configdefaultbronzeworkshoplogs'] = 'Minimum average activity for Workshop activities required for Bronze if used.';

$string['configbronzechoice'] = 'Choice Criteria Type';
$string['configbronzechoicexp'] = 'Define whether the minimum number of Choice Activities should be excluded, mandatory or optional to this medal criteria.';
$string['bronzechoice'] = 'Number of Choice Activities';
$string['configdefaultbronzechoice'] = 'Number of Choice activities required for Bronze if used.';

$string['configbronzechoicelogs'] = 'Choice Activity';
$string['configbronzechoicexplogs'] = 'The minimum average student activity for choice activities.';
$string['bronzechoicelogs']= 'Minimum Choice Activity';
$string['configdefaultbronzechoicelogs'] = 'Minimum average activity for Choice activities required for Bronze if used.';

$string['configbronzeglossary'] = 'Glossary Criteria Type';
$string['configbronzeglossaryxp'] = 'Define whether the minimum number of glossaries should be excluded, mandatory or optional to this medal criteria.';
$string['bronzeglossary'] = 'Number of Glossaries';
$string['configdefaultbronzeglossary'] = 'Number of Glossaries required for Bronze if used.';

$string['configbronzeglossarylogs'] = 'Glossary Activity';
$string['configbronzeglossaryxplogs'] = 'The minimum average student activity for Glossary activities.';
$string['bronzeglossarylogs']= 'Minimum Glossary Activity';
$string['configdefaultbronzeglossarylogs'] = 'Minimum average activity for Glossary activities required for Bronze if used.';

//silver settings --------------------------------------------------------------

$string['silvernumoptional'] = "Optional Requirements";
$string['silvernumoptionalxp'] = "This is the number of optional settings needed to be fulfilled before awarding this 
medal. Use this setting when benchmarking to a selection of a range of activities. Note: select only the minimum number of criteria.";
$string['silver_heading'] = 'Configure Silver Benchmarking';
$string['explaingeneralsilver'] = 'These are the settings used for the Silver medal auto calculations.';

$string['configsilverlabels'] = 'Labels Criteria Type';
$string['configsilverlabelsxp'] = 'Define whether the minimum labels count should be excluded, mandatory or optional to this medal criteria.';
$string['silverlabels']= 'Number of Labels';
$string['configdefaultsilverlabels'] = 'Number of Labels required for Silver if used.';

$string['configsilverlabelslogs'] = 'Label Activity';
$string['configsilverlabelsxplogs'] = 'The minimum average student views for Labels.';
$string['silverlabelslogs']= 'Minimum Label Activity';
$string['configdefaultsilverlabelslogs'] = 'Minimum average activity for Labels required for Silver if used.';

$string['configsilverfolders'] = 'Folders Criteria Type';
$string['configsilverfoldersxp'] = 'Define whether the minimum folders count should be excluded, mandatory or optional to this medal criteria.';
$string['silverfolders']= 'Number of Folders';
$string['configdefaultsilverfolders'] = 'Number of folders required for Silver if used.';

$string['configsilverfolderslogs'] = 'Label Activity';
$string['configsilverfoldersxplogs'] = 'The minimum average student views before being able to have a calculated medal score. All courses without this criteria will be marked as in development';
$string['silverfolderslogs']= 'Minimum Label Activity';
$string['configdefaultsilverfolderslogs'] = 'Minimum average activity for Folders required for Silver if used.';

$string['configsilverheadings'] = 'Headings Criteria Type';
$string['configsilverheadingsxp'] = 'Define whether each section should have a defined header which isn\'t the default and should be excluded, mandatory or optional to this medal criteria.';
$string['silverheadings']= 'Section Headings';
$string['configdefaultsilverheadings'] = 'Whether each section should have a heading for Silver.';

$string['configsilverurls'] = 'URLs Criteria Type';
$string['configsilverurlsxp'] = 'Define whether the minimum URLs count should be excluded, mandatory or optional to this medal criteria.';
$string['silverurls']= 'Number of URLss';
$string['configdefaultsilverurls'] = 'Number of URLs required for Silver if used.';

$string['configsilverurlslogs'] = 'URL Activity';
$string['configsilverurlsxplogs'] = 'The minimum average student views for URLs.';
$string['silverurlslogs']= 'Minimum URL Activity';
$string['configdefaultsilverurlslogs'] = 'Minimum average activity for urls required for Silver if used.';

$string['configsilverresources'] = 'Resources Criteria Type';
$string['configsilverresourcesxp'] = 'Define whether the minimum resources count should be excluded, mandatory or optional to this medal criteria.';
$string['silverresources']= 'Number of Resources';
$string['configdefaultsilverresources'] = 'Number of resources required for Silver if used. This is a total of documents within books, folders
labels, pages and on the main course page.';

$string['configsilverassignments'] = 'Assignments Criteria Type';
$string['configsilverassignmentsxp'] = 'Define whether the minimum number of assignments (Moodle and Turnitin) count should be excluded, mandatory or optional to this medal criteria.';
$string['silverassignments'] = 'Number of Assignments';
$string['configdefaultsilverassignments'] = 'Number of assignments required for Silver if used. This is the total of assignments within a course page.';

$string['configsilverassignmentslogs'] = 'Assignment Activity';
$string['configsilverassignmentsxplogs'] = 'The minimum average student activity for Assignments.';
$string['silverassignmentslogs']= 'Minimum Assignment Activity';
$string['configdefaultsilverassignmentslogs'] = 'Minimum average activity for Assignments required for Silver if used.';

$string['configsilverfeedback'] = 'Feedback Criteria Type';
$string['configsilverfeedbackxp'] = 'Define whether the minimum number of Feedback count should be excluded, mandatory or optional to this medal criteria.';
$string['silverfeedback'] = 'Number of Feedback Activities';
$string['configdefaultsilverfeedback'] = 'Number of Feedback activities required for Silver if used.';

$string['configsilverfeedbacklogs'] = 'Feedback Activity';
$string['configsilverfeedbackxplogs'] = 'The minimum average student activity for Feedback activities.';
$string['silverfeedbacklogs']= 'Minimum Feedback Activity';
$string['configdefaultsilverfeedbacklogs'] = 'Minimum average activity for Feedback activities required for Silver if used.';

$string['configsilverims'] = 'IMS package Criteria Type';
$string['configsilverimsxp'] = 'Define whether the minimum number of IMS package count should be excluded, mandatory or optional to this medal criteria.';
$string['silverims'] = 'Number of IMS packages';
$string['configdefaultsilverims'] = 'Number of IMS packages required for Silver if used.';

$string['configsilverimslogs'] = 'IMS Activity';
$string['configsilverimsxplogs'] = 'The minimum average student activity for IMS activities.';
$string['silverimslogs']= 'Minimum Feedback Activity';
$string['configdefaultsilverimslogs'] = 'Minimum average activity for IMS activities required for Silver if used.';

$string['configsilverquest'] = 'Questionnaire Criteria Type';
$string['configsilverquestxp'] = 'Define whether the minimum number of questionnaire count should be excluded, mandatory or optional to this medal criteria.';
$string['silverquest'] = 'Number of Questionnaires';
$string['configdefaultsilverquest'] = 'Number of Questionnaires required for Silver if used.';

$string['configsilverquestlogs'] = 'Questionnaire Activity';
$string['configsilverquestxplogs'] = 'The minimum average student activity for Questionnaire activities.';
$string['silverquestlogs']= 'Minimum Questionnaire Activity';
$string['configdefaultsilverquestlogs'] = 'Minimum average activity for Questionnaire activities required for Silver if used.';

$string['configsilverquiz'] = 'Quiz Criteria Type';
$string['configsilverquizxp'] = 'Define whether the minimum number of Quiz count should be excluded, mandatory or optional to this medal criteria.';
$string['silverquiz'] = 'Number of Quizzes';
$string['configdefaultsilverquiz'] = 'Number of Quizzes required for Silver if used.';

$string['configsilverquizlogs'] = 'Quiz Activity';
$string['configsilverquizxplogs'] = 'The minimum average student activity for Quiz activities.';
$string['silverquizlogs']= 'Minimum Quiz Activity';
$string['configdefaultsilverquizlogs'] = 'Minimum average activity for Quiz activities required for Silver if used.';

$string['configsilverembed'] = 'Embed Criteria Type';
$string['configsilverembedxp'] = 'Define whether the minimum number of embedded videos count should be excluded, mandatory or optional to this medal criteria.';
$string['silverembed'] = 'Number of embedded videos';
$string['configdefaultsilverembed'] = 'Number of embedded videos required for Silver if used.';

$string['configsilverchat'] = 'Chat Criteria Type';
$string['configsilverchatxp'] = 'Define whether the minimum number of chat activity count should be excluded, mandatory or optional to this medal criteria.';
$string['silverchat'] = 'Number of Chat Activities';
$string['configdefaultsilverchat'] = 'Number of chat activities required for Silver if used.';

$string['configsilverchatlogs'] = 'Chat Activity';
$string['configsilverchatxplogs'] = 'The minimum average student activity for Chat activities.';
$string['silverchatlogs']= 'Minimum Chat Activity';
$string['configdefaultsilverchatlogs'] = 'Minimum average activity for Chat activities required for Silver if used.';

$string['configsilverforum'] = 'Forum Criteria Type';
$string['configsilverforumxp'] = 'Define whether the minimum number of forum count should be excluded, mandatory or optional to this medal criteria.';
$string['silverforum'] = 'Number of Forums';
$string['configdefaultsilverforum'] = 'Number of Forums required for Silver if used.';

$string['configsilverforumlogs'] = 'Forum Activity';
$string['configsilverforumxplogs'] = 'The minimum average student activity for Forum activities.';
$string['silverforumlogs']= 'Minimum Forum Activity';
$string['configdefaultsilverforumlogs'] = 'Minimum average activity for Forum activities required for Silver if used.';

$string['configsilverwiki'] = 'Wiki Criteria Type';
$string['configsilverwikixp'] = 'Define whether the minimum number of Wiki\'s count should be excluded, mandatory or optional to this medal criteria.';
$string['silverwiki'] = 'Number of Wiki Activities';
$string['configdefaultsilverwiki'] = 'Number of Wiki Activities required for Silver if used.';

$string['configsilverwikilogs'] = 'Wiki Activity';
$string['configsilverwikixplogs'] = 'The minimum average student activity for Wiki activities.';
$string['silverwikilogs']= 'Minimum Wiki Activity';
$string['configdefaultsilverwikilogs'] = 'Minimum average activity for Wiki activities required for Silver if used.';

$string['configsilverbook'] = 'Book Criteria Type';
$string['configsilverbookxp'] = 'Define whether the minimum number of Books should be excluded, mandatory or optional to this medal criteria.';
$string['silverbook'] = 'Number of Books';
$string['configdefaultsilverbook'] = 'Number of Books required for Silver if used.';

$string['configsilverbooklogs'] = 'Book Activity';
$string['configsilverbookxplogs'] = 'The minimum average student activity for Book activities.';
$string['silverbooklogs']= 'Minimum Book Activity';
$string['configdefaultsilverbooklogs'] = 'Minimum average activity for Book activities required for Silver if used.';

$string['configsilverdatabase'] = 'Database Criteria Type';
$string['configsilverdatabasexp'] = 'Define whether the minimum number of databases should be excluded, mandatory or optional to this medal criteria.';
$string['silverdatabase'] = 'Number of Databases';
$string['configdefaultsilverdatabase'] = 'Number of Databases required for Silver if used.';

$string['configsilverdatabaselogs'] = 'Database Activity';
$string['configsilverdatabasexplogs'] = 'The minimum average student activity for database activities.';
$string['silverdatabaselogs']= 'Minimum Database Activity';
$string['configdefaultsilverdatabaselogs'] = 'Minimum average activity for Database activities required for Silver if used.';

$string['configsilverworkshop'] = 'Workshop Criteria Type';
$string['configsilverworkshopxp'] = 'Define whether the minimum number of workshops should be excluded, mandatory or optional to this medal criteria.';
$string['silverworkshop'] = 'Number of Workshops';
$string['configdefaultsilverworkshop'] = 'Number of Workshops required for Silver if used.';

$string['configsilverworkshoplogs'] = 'workshop Activity';
$string['configsilverworkshopxplogs'] = 'The minimum average student activity for workshop activities.';
$string['silverworkshoplogs']= 'Minimum workshop Activity';
$string['configdefaultsilverworkshoplogs'] = 'Minimum average activity for Workshop activities required for Silver if used.';

$string['configsilverchoice'] = 'Choice Criteria Type';
$string['configsilverchoicexp'] = 'Define whether the minimum number of Choice Activities should be excluded, mandatory or optional to this medal criteria.';
$string['silverchoice'] = 'Number of Choice Activities';
$string['configdefaultsilverchoice'] = 'Number of Choice activities required for Silver if used.';

$string['configsilverchoicelogs'] = 'Choice Activity';
$string['configsilverchoicexplogs'] = 'The minimum average student activity for choice activities.';
$string['silverchoicelogs']= 'Minimum Choice Activity';
$string['configdefaultsilverchoicelogs'] = 'Minimum average activity for Choice activities required for Silver if used.';

$string['configsilverglossary'] = 'Glossary Criteria Type';
$string['configsilverglossaryxp'] = 'Define whether the minimum number of glossaries should be excluded, mandatory or optional to this medal criteria.';
$string['silverglossary'] = 'Number of Glossaries';
$string['configdefaultsilverglossary'] = 'Number of Glossaries required for Silver if used.';

$string['configsilverglossarylogs'] = 'Glossary Activity';
$string['configsilverglossaryxplogs'] = 'The minimum average student activity for Glossary activities.';
$string['silverglossarylogs']= 'Minimum Glossary Activity';
$string['configdefaultsilverglossarylogs'] = 'Minimum average activity for Glossary activities required for Silver if used.';

//gold settings --------------------------------------------------------------

$string['goldnumoptional'] = "Optional Requirements";
$string['goldnumoptionalxp'] = "This is the number of optional settings needed to be fulfilled before awarding this 
medal. Use this setting when benchmarking to a selection of a range of activities. Note: select only the minimum number of criteria.";
$string['gold_heading'] = 'Configure Gold Benchmarking';
$string['explaingeneralgold'] = 'These are the settings used for the Gold medal auto calculations.';

$string['configgoldlabels'] = 'Labels Criteria Type';
$string['configgoldlabelsxp'] = 'Define whether the minimum labels count should be excluded, mandatory or optional to this medal criteria.';
$string['goldlabels']= 'Number of Labels';
$string['configdefaultgoldlabels'] = 'Number of Labels required for Gold if used.';

$string['configgoldlabelslogs'] = 'Label Activity';
$string['configgoldlabelsxplogs'] = 'The minimum average student views for Labels.';
$string['goldlabelslogs']= 'Minimum Label Activity';
$string['configdefaultgoldlabelslogs'] = 'Minimum average activity for Labels required for Gold if used.';

$string['configgoldfolders'] = 'Folders Criteria Type';
$string['configgoldfoldersxp'] = 'Define whether the minimum folders count should be excluded, mandatory or optional to this medal criteria.';
$string['goldfolders']= 'Number of Folders';
$string['configdefaultgoldfolders'] = 'Number of folders required for Gold if used.';

$string['configgoldfolderslogs'] = 'Label Activity';
$string['configgoldfoldersxplogs'] = 'The minimum average student views before being able to have a calculated medal score. All courses without this criteria will be marked as in development';
$string['goldfolderslogs']= 'Minimum Label Activity';
$string['configdefaultgoldfolderslogs'] = 'Minimum average activity for Folders required for Gold if used.';

$string['configgoldheadings'] = 'Headings Criteria Type';
$string['configgoldheadingsxp'] = 'Define whether each section should have a defined header which isn\'t the default and should be excluded, mandatory or optional to this medal criteria.';
$string['goldheadings']= 'Section Headings';
$string['configdefaultgoldheadings'] = 'Whether each section should have a heading for Gold.';

$string['configgoldurls'] = 'URLs Criteria Type';
$string['configgoldurlsxp'] = 'Define whether the minimum URLs count should be excluded, mandatory or optional to this medal criteria.';
$string['goldurls']= 'Number of URLss';
$string['configdefaultgoldurls'] = 'Number of URLs required for Gold if used.';

$string['configgoldurlslogs'] = 'URL Activity';
$string['configgoldurlsxplogs'] = 'The minimum average student views for URLs.';
$string['goldurlslogs']= 'Minimum URL Activity';
$string['configdefaultgoldurlslogs'] = 'Minimum average activity for urls required for Gold if used.';

$string['configgoldresources'] = 'Resources Criteria Type';
$string['configgoldresourcesxp'] = 'Define whether the minimum resources count should be excluded, mandatory or optional to this medal criteria.';
$string['goldresources']= 'Number of Resources';
$string['configdefaultgoldresources'] = 'Number of resources required for Gold if used. This is a total of documents within books, folders
labels, pages and on the main course page.';

$string['configgoldassignments'] = 'Assignments Criteria Type';
$string['configgoldassignmentsxp'] = 'Define whether the minimum number of assignments (Moodle and Turnitin) count should be excluded, mandatory or optional to this medal criteria.';
$string['goldassignments'] = 'Number of Assignments';
$string['configdefaultgoldassignments'] = 'Number of assignments required for Gold if used. This is the total of assignments within a course page.';

$string['configgoldassignmentslogs'] = 'Assignment Activity';
$string['configgoldassignmentsxplogs'] = 'The minimum average student activity for Assignments.';
$string['goldassignmentslogs']= 'Minimum Assignment Activity';
$string['configdefaultgoldassignmentslogs'] = 'Minimum average activity for Assignments required for Gold if used.';

$string['configgoldfeedback'] = 'Feedback Criteria Type';
$string['configgoldfeedbackxp'] = 'Define whether the minimum number of Feedback count should be excluded, mandatory or optional to this medal criteria.';
$string['goldfeedback'] = 'Number of Feedback Activities';
$string['configdefaultgoldfeedback'] = 'Number of Feedback activities required for Gold if used.';

$string['configgoldfeedbacklogs'] = 'Feedback Activity';
$string['configgoldfeedbackxplogs'] = 'The minimum average student activity for Feedback activities.';
$string['goldfeedbacklogs']= 'Minimum Feedback Activity';
$string['configdefaultgoldfeedbacklogs'] = 'Minimum average activity for Feedback activities required for Gold if used.';

$string['configgoldims'] = 'IMS package Criteria Type';
$string['configgoldimsxp'] = 'Define whether the minimum number of IMS package count should be excluded, mandatory or optional to this medal criteria.';
$string['goldims'] = 'Number of IMS packages';
$string['configdefaultgoldims'] = 'Number of IMS packages required for Gold if used.';

$string['configgoldimslogs'] = 'IMS Activity';
$string['configgoldimsxplogs'] = 'The minimum average student activity for IMS activities.';
$string['goldimslogs']= 'Minimum Feedback Activity';
$string['configdefaultgoldimslogs'] = 'Minimum average activity for IMS activities required for Gold if used.';

$string['configgoldquest'] = 'Questionnaire Criteria Type';
$string['configgoldquestxp'] = 'Define whether the minimum number of questionnaire count should be excluded, mandatory or optional to this medal criteria.';
$string['goldquest'] = 'Number of Questionnaires';
$string['configdefaultgoldquest'] = 'Number of Questionnaires required for Gold if used.';

$string['configgoldquestlogs'] = 'Questionnaire Activity';
$string['configgoldquestxplogs'] = 'The minimum average student activity for Questionnaire activities.';
$string['goldquestlogs']= 'Minimum Questionnaire Activity';
$string['configdefaultgoldquestlogs'] = 'Minimum average activity for Questionnaire activities required for Gold if used.';

$string['configgoldquiz'] = 'Quiz Criteria Type';
$string['configgoldquizxp'] = 'Define whether the minimum number of Quiz count should be excluded, mandatory or optional to this medal criteria.';
$string['goldquiz'] = 'Number of Quizzes';
$string['configdefaultgoldquiz'] = 'Number of Quizzes required for Gold if used.';

$string['configgoldquizlogs'] = 'Quiz Activity';
$string['configgoldquizxplogs'] = 'The minimum average student activity for Quiz activities.';
$string['goldquizlogs']= 'Minimum Quiz Activity';
$string['configdefaultgoldquizlogs'] = 'Minimum average activity for Quiz activities required for Gold if used.';

$string['configgoldembed'] = 'Embed Criteria Type';
$string['configgoldembedxp'] = 'Define whether the minimum number of embedded videos count should be excluded, mandatory or optional to this medal criteria.';
$string['goldembed'] = 'Number of embedded videos';
$string['configdefaultgoldembed'] = 'Number of embedded videos required for Gold if used.';

$string['configgoldchat'] = 'Chat Criteria Type';
$string['configgoldchatxp'] = 'Define whether the minimum number of chat activity count should be excluded, mandatory or optional to this medal criteria.';
$string['goldchat'] = 'Number of Chat Activities';
$string['configdefaultgoldchat'] = 'Number of chat activities required for Gold if used.';

$string['configgoldchatlogs'] = 'Chat Activity';
$string['configgoldchatxplogs'] = 'The minimum average student activity for Chat activities.';
$string['goldchatlogs']= 'Minimum Chat Activity';
$string['configdefaultgoldchatlogs'] = 'Minimum average activity for Chat activities required for Gold if used.';

$string['configgoldforum'] = 'Forum Criteria Type';
$string['configgoldforumxp'] = 'Define whether the minimum number of forum count should be excluded, mandatory or optional to this medal criteria.';
$string['goldforum'] = 'Number of Forums';
$string['configdefaultgoldforum'] = 'Number of Forums required for Gold if used.';

$string['configgoldforumlogs'] = 'Forum Activity';
$string['configgoldforumxplogs'] = 'The minimum average student activity for Forum activities.';
$string['goldforumlogs']= 'Minimum Forum Activity';
$string['configdefaultgoldforumlogs'] = 'Minimum average activity for Forum activities required for Gold if used.';

$string['configgoldwiki'] = 'Wiki Criteria Type';
$string['configgoldwikixp'] = 'Define whether the minimum number of Wiki\'s count should be excluded, mandatory or optional to this medal criteria.';
$string['goldwiki'] = 'Number of Wiki Activities';
$string['configdefaultgoldwiki'] = 'Number of Wiki Activities required for Gold if used.';

$string['configgoldwikilogs'] = 'Wiki Activity';
$string['configgoldwikixplogs'] = 'The minimum average student activity for Wiki activities.';
$string['goldwikilogs']= 'Minimum Wiki Activity';
$string['configdefaultgoldwikilogs'] = 'Minimum average activity for Wiki activities required for Gold if used.';

$string['configgoldbook'] = 'Book Criteria Type';
$string['configgoldbookxp'] = 'Define whether the minimum number of Books should be excluded, mandatory or optional to this medal criteria.';
$string['goldbook'] = 'Number of Books';
$string['configdefaultgoldbook'] = 'Number of Books required for Gold if used.';

$string['configgoldbooklogs'] = 'Book Activity';
$string['configgoldbookxplogs'] = 'The minimum average student activity for Book activities.';
$string['goldbooklogs']= 'Minimum Book Activity';
$string['configdefaultgoldbooklogs'] = 'Minimum average activity for Book activities required for Gold if used.';

$string['configgolddatabase'] = 'Database Criteria Type';
$string['configgolddatabasexp'] = 'Define whether the minimum number of databases should be excluded, mandatory or optional to this medal criteria.';
$string['golddatabase'] = 'Number of Databases';
$string['configdefaultgolddatabase'] = 'Number of Databases required for Gold if used.';

$string['configgolddatabaselogs'] = 'Database Activity';
$string['configgolddatabasexplogs'] = 'The minimum average student activity for database activities.';
$string['golddatabaselogs']= 'Minimum Database Activity';
$string['configdefaultgolddatabaselogs'] = 'Minimum average activity for Database activities required for Gold if used.';

$string['configgoldworkshop'] = 'Workshop Criteria Type';
$string['configgoldworkshopxp'] = 'Define whether the minimum number of workshops should be excluded, mandatory or optional to this medal criteria.';
$string['goldworkshop'] = 'Number of Workshops';
$string['configdefaultgoldworkshop'] = 'Number of Workshops required for Gold if used.';

$string['configgoldworkshoplogs'] = 'workshop Activity';
$string['configgoldworkshopxplogs'] = 'The minimum average student activity for workshop activities.';
$string['goldworkshoplogs']= 'Minimum workshop Activity';
$string['configdefaultgoldworkshoplogs'] = 'Minimum average activity for Workshop activities required for Gold if used.';

$string['configgoldchoice'] = 'Choice Criteria Type';
$string['configgoldchoicexp'] = 'Define whether the minimum number of Choice Activities should be excluded, mandatory or optional to this medal criteria.';
$string['goldchoice'] = 'Number of Choice Activities';
$string['configdefaultgoldchoice'] = 'Number of Choice activities required for Gold if used.';

$string['configgoldchoicelogs'] = 'Choice Activity';
$string['configgoldchoicexplogs'] = 'The minimum average student activity for choice activities.';
$string['goldchoicelogs']= 'Minimum Choice Activity';
$string['configdefaultgoldchoicelogs'] = 'Minimum average activity for Choice activities required for Gold if used.';

$string['configgoldglossary'] = 'Glossary Criteria Type';
$string['configgoldglossaryxp'] = 'Define whether the minimum number of glossaries should be excluded, mandatory or optional to this medal criteria.';
$string['goldglossary'] = 'Number of Glossaries';
$string['configdefaultgoldglossary'] = 'Number of Glossaries required for Gold if used.';

$string['configgoldglossarylogs'] = 'Glossary Activity';
$string['configgoldglossaryxplogs'] = 'The minimum average student activity for Glossary activities.';
$string['goldglossarylogs']= 'Minimum Glossary Activity';