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

defined('MOODLE_INTERNAL') || die;

$ADMIN->add('reports', new admin_externalpage('report_gsb',
        get_string('pluginname', 'report_gsb'),
        new moodle_url('/report/gsb/index.php'),
        'report/gsb:viewmygsbreport'));
		

$selection = array('optional'=>'optional', 'mandatory'=>'mandatory', 'exclude'=>'exclude');
$count = array('0'=>'0', '1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10', 
'11'=>'11', '12'=>'12', '13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17');


if ($ADMIN->fulltree) {

    //--- general settings -----------------------------------------------------------------------------------

    $settings->add(new admin_setting_configcheckbox('gsb/subcategories',
        get_string('subcategories', 'report_gsb'), get_string('subcategoriesxp', 'report_gsb'), 0));

    $settings->add(new admin_setting_configtext('gsb/studentviews', get_string('studentviews', 'report_gsb'),
                   get_string('studentviewsxp', 'report_gsb'), 0, PARAM_INTEGER));

    $settings->add(new admin_setting_configtext('gsb/minenrolments', get_string('minenrolments', 'report_gsb'),
                   get_string('minenrolmentsxp', 'report_gsb'), 1, PARAM_INTEGER));

    $settings->add(new admin_setting_configcheckbox('gsb/automedal',
        get_string('automedal', 'report_gsb'), get_string('automedalxp', 'report_gsb'), 0));
		
	$settings->add(new admin_setting_pickroles('gsb/studentrole', get_string('roles'),
                        '', array('student'))); 	

    //--- bronze settings -----------------------------------------------------------------------------------
	
	$settings->add(new admin_setting_heading('gsb/bronze_heading', get_string('bronze_heading', 'report_gsb'),
                       get_string('explaingeneralbronze', 'report_gsb')));

    $settings->add(new admin_setting_configselect('gsb/bronzenumoptional', get_string('bronzenumoptional', 'report_gsb'),
                            get_string('bronzenumoptionalxp', 'report_gsb'),
                            '0', $count));
							
    $settings->add(new admin_setting_configselect('gsb/bronzeresourcestype', get_string('configbronzeresources', 'report_gsb'),
                       get_string('configbronzeresourcesxp', 'report_gsb'), 'mandatory', $selection));
					   

    $settings->add(new admin_setting_configtext('gsb/bronzeresources', get_string('bronzeresources', 'report_gsb'),
                   get_string('configdefaultbronzeresources', 'report_gsb'), 20, PARAM_INTEGER));
				   
    $settings->add(new admin_setting_configselect('gsb/bronzelabelstype', get_string('configbronzelabels', 'report_gsb'),
                       get_string('configbronzelabelsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/bronzelabels', get_string('bronzelabels', 'report_gsb'),
                   get_string('configdefaultbronzelabels', 'report_gsb'), 0, PARAM_INTEGER));			

    $settings->add(new admin_setting_configselect('gsb/bronzefolderstype', get_string('configbronzefolders', 'report_gsb'),
                       get_string('configbronzefoldersxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/bronzefolders', get_string('bronzefolders', 'report_gsb'),
                   get_string('configdefaultbronzefolders', 'report_gsb'), 0, PARAM_INTEGER));		

    $settings->add(new admin_setting_configselect('gsb/bronzeheadingstype', get_string('configbronzeheadings', 'report_gsb'),
                       get_string('configbronzeheadingsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configcheckbox('gsb/bronzeheadings', get_string('bronzeheadings', 'report_gsb'),
                   get_string('configdefaultbronzeheadings', 'report_gsb'), 0));			

    $settings->add(new admin_setting_configselect('gsb/bronzeurlstype', get_string('configbronzeurls', 'report_gsb'),
                       get_string('configbronzeurlsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/bronzeurls', get_string('bronzeurls', 'report_gsb'),
                   get_string('configdefaultbronzeurls', 'report_gsb'), 0, PARAM_INTEGER));							   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzeassignmentstype', get_string('configbronzeassignments', 'report_gsb'),
                       get_string('configbronzeassignmentsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/bronzeassignments', get_string('bronzeassignments', 'report_gsb'),
                   get_string('configdefaultbronzeassignments', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/bronzefeedbacktype', get_string('configbronzefeedback', 'report_gsb'),
                       get_string('configbronzefeedbackxp', 'report_gsb'), 'exclude', $selection));				   

    $settings->add(new admin_setting_configtext('gsb/bronzefeedback', get_string('bronzefeedback', 'report_gsb'),
                   get_string('configdefaultbronzefeedback', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/bronzeimstype', get_string('configbronzeims', 'report_gsb'),
                       get_string('configbronzeimsxp', 'report_gsb'), 'exclude', $selection));				   
				   
    $settings->add(new admin_setting_configtext('gsb/bronzeims', get_string('bronzeims', 'report_gsb'),
                   get_string('configdefaultbronzeims', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/bronzequesttype', get_string('configbronzequest', 'report_gsb'),
                       get_string('configbronzequestxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzequest', get_string('bronzequest', 'report_gsb'),
                   get_string('configdefaultbronzequest', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/bronzequiztype', get_string('configbronzequiz', 'report_gsb'),
                       get_string('configbronzequizxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzequiz', get_string('bronzequiz', 'report_gsb'),
                   get_string('configdefaultbronzequiz', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/bronzeembedtype', get_string('configbronzeembed', 'report_gsb'),
                       get_string('configbronzeembedxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzeembed', get_string('bronzeembed', 'report_gsb'),
                   get_string('configdefaultbronzeembed', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzechattype', get_string('configbronzechat', 'report_gsb'),
                       get_string('configbronzechatxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzechat', get_string('bronzechat', 'report_gsb'),
                   get_string('configdefaultbronzechat', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzeforumtype', get_string('configbronzeforum', 'report_gsb'),
                       get_string('configbronzeforumxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzeforum', get_string('bronzeforum', 'report_gsb'),
                   get_string('configdefaultbronzeforum', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzewikitype', get_string('configbronzewiki', 'report_gsb'),
                       get_string('configbronzewikixp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/bronzewiki', get_string('bronzewiki', 'report_gsb'),
                   get_string('configdefaultbronzewiki', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzebooktype', get_string('configbronzebook', 'report_gsb'),
                       get_string('configbronzebookxp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/bronzebook', get_string('bronzebook', 'report_gsb'),
                   get_string('configdefaultbronzebook', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzedatabasetype', get_string('configbronzedatabase', 'report_gsb'),
                       get_string('configbronzedatabasexp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/bronzedatabase', get_string('bronzedatabase', 'report_gsb'),
                   get_string('configdefaultbronzedatabase', 'report_gsb'), 0, PARAM_INTEGER));
				   
    $settings->add(new admin_setting_configselect('gsb/bronzeworkshoptype', get_string('configbronzeworkshop', 'report_gsb'),
                       get_string('configbronzeworkshopxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzeworkshop', get_string('bronzeworkshop', 'report_gsb'),
                   get_string('configdefaultbronzeworkshop', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/bronzechoicetype', get_string('configbronzechoice', 'report_gsb'),
                       get_string('configbronzechoicexp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/bronzechoice', get_string('bronzechoice', 'report_gsb'),
                   get_string('configdefaultbronzechoice', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/bronzeglossarytype', get_string('configbronzeglossary', 'report_gsb'),
                       get_string('configbronzeglossaryxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/bronzeglossary', get_string('bronzeglossary', 'report_gsb'),
                   get_string('configdefaultbronzeglossary', 'report_gsb'), 0, PARAM_INTEGER));

    //--- silver settings -----------------------------------------------------------------------------------
	
	$settings->add(new admin_setting_heading('gsb/silver_heading', get_string('silver_heading', 'report_gsb'),
                       get_string('explaingeneralsilver', 'report_gsb')));

    $settings->add(new admin_setting_configselect('gsb/silvernumoptional', get_string('silvernumoptional', 'report_gsb'),
                            get_string('silvernumoptionalxp', 'report_gsb'),
                            '2', $count));
							
    $settings->add(new admin_setting_configselect('gsb/silverresourcestype', get_string('configsilverresources', 'report_gsb'),
                       get_string('configsilverresourcesxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/silverresources', get_string('silverresources', 'report_gsb'),
                   get_string('configdefaultsilverresources', 'report_gsb'), 20, PARAM_INTEGER));

   $settings->add(new admin_setting_configselect('gsb/silverlabelstype', get_string('configsilverlabels', 'report_gsb'),
                       get_string('configsilverlabelsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/silverlabels', get_string('silverlabels', 'report_gsb'),
                   get_string('configdefaultsilverlabels', 'report_gsb'), 0, PARAM_INTEGER));			

    $settings->add(new admin_setting_configselect('gsb/silverfolderstype', get_string('configsilverfolders', 'report_gsb'),
                       get_string('configsilverfoldersxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/silverfolders', get_string('silverfolders', 'report_gsb'),
                   get_string('configdefaultsilverfolders', 'report_gsb'), 0, PARAM_INTEGER));		

    $settings->add(new admin_setting_configselect('gsb/silverheadingstype', get_string('configsilverheadings', 'report_gsb'),
                       get_string('configsilverheadingsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configcheckbox('gsb/silverheadings', get_string('silverheadings', 'report_gsb'),
                   get_string('configdefaultsilverheadings', 'report_gsb'), 0));			

    $settings->add(new admin_setting_configselect('gsb/silverurlstype', get_string('configsilverurls', 'report_gsb'),
                       get_string('configsilverurlsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/silverurls', get_string('silverurls', 'report_gsb'),
                   get_string('configdefaultsilverurls', 'report_gsb'), 0, PARAM_INTEGER));				
				   
    $settings->add(new admin_setting_configselect('gsb/silverassignmentstype', get_string('configsilverassignments', 'report_gsb'),
                       get_string('configsilverassignmentsxp', 'report_gsb'), 'optional', $selection));

    $settings->add(new admin_setting_configtext('gsb/silverassignments', get_string('silverassignments', 'report_gsb'),
                   get_string('configdefaultsilverassignments', 'report_gsb'), 1, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/silverfeedbacktype', get_string('configsilverfeedback', 'report_gsb'),
                       get_string('configsilverfeedbackxp', 'report_gsb'), 'optional', $selection));				   

    $settings->add(new admin_setting_configtext('gsb/silverfeedback', get_string('silverfeedback', 'report_gsb'),
                   get_string('configdefaultsilverfeedback', 'report_gsb'), 1, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/silverimstype', get_string('configsilverims', 'report_gsb'),
                       get_string('configsilverimsxp', 'report_gsb'), 'optional', $selection));				   
				   
    $settings->add(new admin_setting_configtext('gsb/silverims', get_string('silverims', 'report_gsb'),
                   get_string('configdefaultsilverims', 'report_gsb'), 1, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/silverquesttype', get_string('configsilverquest', 'report_gsb'),
                       get_string('configsilverquestxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverquest', get_string('silverquest', 'report_gsb'),
                   get_string('configdefaultsilverquest', 'report_gsb'), 1, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/silverquiztype', get_string('configsilverquiz', 'report_gsb'),
                       get_string('configsilverquizxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverquiz', get_string('silverquiz', 'report_gsb'),
                   get_string('configdefaultsilverquiz', 'report_gsb'), 1, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/silverembedtype', get_string('configsilverembed', 'report_gsb'),
                       get_string('configsilverembedxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverembed', get_string('silverembed', 'report_gsb'),
                   get_string('configdefaultsilverembed', 'report_gsb'), 1, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/silverchattype', get_string('configsilverchat', 'report_gsb'),
                       get_string('configsilverchatxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverchat', get_string('silverchat', 'report_gsb'),
                   get_string('configdefaultsilverchat', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/silverforumtype', get_string('configsilverforum', 'report_gsb'),
                       get_string('configsilverforumxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverforum', get_string('silverforum', 'report_gsb'),
                   get_string('configdefaultsilverforum', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/silverwikitype', get_string('configsilverwiki', 'report_gsb'),
                       get_string('configsilverwikixp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/silverwiki', get_string('silverwiki', 'report_gsb'),
                   get_string('configdefaultsilverwiki', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/silverbooktype', get_string('configsilverbook', 'report_gsb'),
                       get_string('configsilverbookxp', 'report_gsb'), 'optional', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/silverbook', get_string('silverbook', 'report_gsb'),
                   get_string('configdefaultsilverbook', 'report_gsb'), 1, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/silverdatabasetype', get_string('configsilverdatabase', 'report_gsb'),
                       get_string('configsilverdatabasexp', 'report_gsb'), 'optional', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/silverdatabase', get_string('silverdatabase', 'report_gsb'),
                   get_string('configdefaultsilverdatabase', 'report_gsb'), 1, PARAM_INTEGER));
				   
    $settings->add(new admin_setting_configselect('gsb/silverworkshoptype', get_string('configsilverworkshop', 'report_gsb'),
                       get_string('configsilverworkshopxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverworkshop', get_string('silverworkshop', 'report_gsb'),
                   get_string('configdefaultsilverworkshop', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/silverchoicetype', get_string('configsilverchoice', 'report_gsb'),
                       get_string('configsilverchoicexp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/silverchoice', get_string('silverchoice', 'report_gsb'),
                   get_string('configdefaultsilverchoice', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/silverglossarytype', get_string('configsilverglossary', 'report_gsb'),
                       get_string('configsilverglossaryxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/silverglossary', get_string('silverglossary', 'report_gsb'),
                   get_string('configdefaultsilverglossary', 'report_gsb'), 0, PARAM_INTEGER));
	   
    //--- gold settings -----------------------------------------------------------------------------------
	
	$settings->add(new admin_setting_heading('gsb/gold_heading', get_string('gold_heading', 'report_gsb'),
                       get_string('explaingeneralgold', 'report_gsb')));

    $settings->add(new admin_setting_configselect('gsb/goldnumoptional', get_string('goldnumoptional', 'report_gsb'),
                            get_string('goldnumoptionalxp', 'report_gsb'),
                            '1', $count));
					
    $settings->add(new admin_setting_configselect('gsb/goldresourcestype', get_string('configgoldresources', 'report_gsb'),
                       get_string('configgoldresourcesxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/goldresources', get_string('goldresources', 'report_gsb'),
                   get_string('configdefaultgoldresources', 'report_gsb'), 20, PARAM_INTEGER));

   $settings->add(new admin_setting_configselect('gsb/goldlabelstype', get_string('configgoldlabels', 'report_gsb'),
                       get_string('configgoldlabelsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/goldlabels', get_string('goldlabels', 'report_gsb'),
                   get_string('configdefaultgoldlabels', 'report_gsb'), 0, PARAM_INTEGER));			

    $settings->add(new admin_setting_configselect('gsb/goldfolderstype', get_string('configgoldfolders', 'report_gsb'),
                       get_string('configgoldfoldersxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/goldfolders', get_string('goldfolders', 'report_gsb'),
                   get_string('configdefaultgoldfolders', 'report_gsb'), 0, PARAM_INTEGER));		

    $settings->add(new admin_setting_configselect('gsb/goldheadingstype', get_string('configgoldheadings', 'report_gsb'),
                       get_string('configgoldheadingsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configcheckbox('gsb/goldheadings', get_string('goldheadings', 'report_gsb'),
                   get_string('configdefaultgoldheadings', 'report_gsb'), 0));			

    $settings->add(new admin_setting_configselect('gsb/goldurlstype', get_string('configgoldurls', 'report_gsb'),
                       get_string('configgoldurlsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/goldurls', get_string('goldurls', 'report_gsb'),
                   get_string('configdefaultgoldurls', 'report_gsb'), 0, PARAM_INTEGER));				
				   
    $settings->add(new admin_setting_configselect('gsb/goldassignmentstype', get_string('configgoldassignments', 'report_gsb'),
                       get_string('configgoldassignmentsxp', 'report_gsb'), 'exclude', $selection));

    $settings->add(new admin_setting_configtext('gsb/goldassignments', get_string('goldassignments', 'report_gsb'),
                   get_string('configdefaultgoldassignments', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/goldfeedbacktype', get_string('configgoldfeedback', 'report_gsb'),
                       get_string('configgoldfeedbackxp', 'report_gsb'), 'exclude', $selection));				   

    $settings->add(new admin_setting_configtext('gsb/goldfeedback', get_string('goldfeedback', 'report_gsb'),
                   get_string('configdefaultgoldfeedback', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/goldimstype', get_string('configgoldims', 'report_gsb'),
                       get_string('configgoldimsxp', 'report_gsb'), 'exclude', $selection));				   
				   
    $settings->add(new admin_setting_configtext('gsb/goldims', get_string('goldims', 'report_gsb'),
                   get_string('configdefaultgoldims', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/goldquesttype', get_string('configgoldquest', 'report_gsb'),
                       get_string('configgoldquestxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldquest', get_string('goldquest', 'report_gsb'),
                   get_string('configdefaultgoldquest', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/goldquiztype', get_string('configgoldquiz', 'report_gsb'),
                       get_string('configgoldquizxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldquiz', get_string('goldquiz', 'report_gsb'),
                   get_string('configdefaultgoldquiz', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/goldembedtype', get_string('configgoldembed', 'report_gsb'),
                       get_string('configgoldembedxp', 'report_gsb'), 'exclude', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldembed', get_string('goldembed', 'report_gsb'),
                   get_string('configdefaultgoldembed', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/goldchattype', get_string('configgoldchat', 'report_gsb'),
                       get_string('configgoldchatxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldchat', get_string('goldchat', 'report_gsb'),
                   get_string('configdefaultgoldchat', 'report_gsb'), 1, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/goldforumtype', get_string('configgoldforum', 'report_gsb'),
                       get_string('configgoldforumxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldforum', get_string('goldforum', 'report_gsb'),
                   get_string('configdefaultgoldforum', 'report_gsb'), 1, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/goldwikitype', get_string('configgoldwiki', 'report_gsb'),
                       get_string('configgoldwikixp', 'report_gsb'), 'optional', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/goldwiki', get_string('goldwiki', 'report_gsb'),
                   get_string('configdefaultgoldwiki', 'report_gsb'), 1, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/goldbooktype', get_string('configgoldbook', 'report_gsb'),
                       get_string('configgoldbookxp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/goldbook', get_string('goldbook', 'report_gsb'),
                   get_string('configdefaultgoldbook', 'report_gsb'), 0, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/golddatabasetype', get_string('configgolddatabase', 'report_gsb'),
                       get_string('configgolddatabasexp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/golddatabase', get_string('golddatabase', 'report_gsb'),
                   get_string('configdefaultgolddatabase', 'report_gsb'), 0, PARAM_INTEGER));
				   
    $settings->add(new admin_setting_configselect('gsb/goldworkshoptype', get_string('configgoldworkshop', 'report_gsb'),
                       get_string('configgoldworkshopxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldworkshop', get_string('goldworkshop', 'report_gsb'),
                   get_string('configdefaultgoldworkshop', 'report_gsb'), 1, PARAM_INTEGER));					   
				   
    $settings->add(new admin_setting_configselect('gsb/goldchoicetype', get_string('configgoldchoice', 'report_gsb'),
                       get_string('configgoldchoicexp', 'report_gsb'), 'exclude', $selection));				   
				   							   
    $settings->add(new admin_setting_configtext('gsb/goldchoice', get_string('goldchoice', 'report_gsb'),
                   get_string('configdefaultgoldchoice', 'report_gsb'), 0, PARAM_INTEGER));	
				   
    $settings->add(new admin_setting_configselect('gsb/goldglossarytype', get_string('configgoldglossary', 'report_gsb'),
                       get_string('configgoldglossaryxp', 'report_gsb'), 'optional', $selection));				   
				   				   
    $settings->add(new admin_setting_configtext('gsb/goldglossary', get_string('goldglossary', 'report_gsb'),
                   get_string('configdefaultgoldglossary', 'report_gsb'), 1, PARAM_INTEGER));		

			   
				  
}

