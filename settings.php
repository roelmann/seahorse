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
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_seahorse
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_seahorse', 'seahorse'));

	// "genericsettings" settingpage
	$temp = new admin_settingpage('theme_seahorse_generic',  get_string('genericsettings', 'theme_seahorse'));
	
    // Logo file setting.
    $name = 'theme_seahorse/logo';
    $title = get_string('logo', 'theme_seahorse');
    $description = get_string('logodesc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom or standard layout.
    $name = 'theme_seahorse/layout';
    $title = get_string('layout', 'theme_seahorse');
    $description = get_string('layoutdesc', 'theme_seahorse');
    $choices = array('threecolhg'=>'3Column Holy Grail', 'blogleft'=>'2 sidebars Left', 'onepre'=>'1 sidebar Left', 'blogright'=>'2 sidebars Right', 'onepost'=>'1 sidebar Right');
    $default = 'threecolhg';
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Main theme background colour setting.
    $name = 'theme_seahorse/themecolor';
    $title = get_string('themecolor', 'theme_seahorse');
    $description = get_string('themecolordesc', 'theme_seahorse');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Background texture file setting.
    $name = 'theme_seahorse/backgroundtexture';
    $title = get_string('backgroundtexture', 'theme_seahorse');
    $description = get_string('backgroundtexturedesc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundtexture');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Main theme text colour.
    $name = 'theme_seahorse/themetextcolor';
    $title = get_string('themetextcolor', 'theme_seahorse');
    $description = get_string('themetextcolordesc', 'theme_seahorse');
    $default = '#020220';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Heading colour 1 setting.
    $name = 'theme_seahorse/themeheading1color';
    $title = get_string('themeheadingcolor1', 'theme_seahorse');
    $description = get_string('themeheadingcolor1desc', 'theme_seahorse');
    $default = '#070770';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Main theme Heading colour 2 setting.
    $name = 'theme_seahorse/themeheading2color';
    $title = get_string('themeheadingcolor2', 'theme_seahorse');
    $description = get_string('themeheadingcolor2desc', 'theme_seahorse');
    $default = '#020220';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Main theme Heading text colour.
    $name = 'theme_seahorse/themeheadingtextcolor';
    $title = get_string('themeheadingtextcolor', 'theme_seahorse');
    $description = get_string('themeheadingtextcolordesc', 'theme_seahorse');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Menu background colour 1 setting.
    $name = 'theme_seahorse/thememenu1color';
    $title = get_string('thememenu1color', 'theme_seahorse');
    $description = get_string('thememenu1colordesc', 'theme_seahorse');
    $default = '#b6ecbc';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Menu backround colour 2 setting.
    $name = 'theme_seahorse/thememenu2color';
    $title = get_string('thememenu2color', 'theme_seahorse');
    $description = get_string('thememenu2colordesc', 'theme_seahorse');
    $default = '#8db5e1';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Block background colour 1 setting.
    $name = 'theme_seahorse/themeblock1color';
    $title = get_string('themeblock1color', 'theme_seahorse');
    $description = get_string('themeblock1colordesc', 'theme_seahorse');
    $default = '#dbf6de';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    // Main theme Block backround colour 2 setting.
    $name = 'theme_seahorse/themeblock2color';
    $title = get_string('themeblock2color', 'theme_seahorse');
    $description = get_string('themeblock2colordesc', 'theme_seahorse');
    $default = '#dbf6de';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Copyright setting.
    $name = 'theme_seahorse/copyright';
    $title = get_string('copyright', 'theme_seahorse');
    $description = get_string('copyrightdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    // Footnote setting.
    $name = 'theme_seahorse/footnote';
    $title = get_string('footnote', 'theme_seahorse');
    $description = get_string('footnotedesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom CSS file.
    $name = 'theme_seahorse/customcss';
    $title = get_string('customcss', 'theme_seahorse');
    $description = get_string('customcssdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

 	$ADMIN->add('theme_seahorse', $temp);
 
 
    /* FrontPage Marketing Block Settings */
    $temp = new admin_settingpage('theme_seahorse_marketing', get_string('marketing', 'theme_seahorse'));
    $temp->add(new admin_setting_heading('theme_seahorse_marketing', get_string('marketingheadingsub', 'theme_seahorse'),
            format_text(get_string('marketingdesc' , 'theme_seahorse'), FORMAT_MARKDOWN)));

    /*
     * Main Marketing block
     */
     
    // Marketing Block backround colour.
    $name = 'theme_seahorse/marketingcolor1';
    $title = get_string('marketingcolor1', 'theme_seahorse');
    $description = get_string('marketingcolor1desc', 'theme_seahorse');
    $default = '';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $name = 'theme_seahorse/marketingcolor2';
    $title = get_string('marketingcolor2', 'theme_seahorse');
    $description = get_string('marketingcolor2desc', 'theme_seahorse');
    $default = '';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Main Text.
    $name = 'theme_seahorse/mainmarketingtext';
    $title = get_string('mainmarketingtext', 'theme_seahorse');
    $description = get_string('mainmarketingtextdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_seahorse/mainmarketingimage';
    $title = get_string('mainmarketingimage', 'theme_seahorse');
    $description = get_string('mainmarketingimagedesc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title,$description, 'mainmarketingimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_seahorse/marketingsubimage1';
    $title = get_string('marketingsubimage1', 'theme_seahorse');
    $description = get_string('marketingsubimage1desc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketingsubimage1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_seahorse/marketingsubimage2';
    $title = get_string('marketingsubimage2', 'theme_seahorse');
    $description = get_string('marketingsubimage2desc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketingsubimage2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Marketing Sub-1 Text.
    $name = 'theme_seahorse/marketingsmall1text';
    $title = get_string('marketingsmall1text', 'theme_seahorse');
    $description = get_string('marketingsmall1textdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Marketing Sub-1 Image.
    $name = 'theme_seahorse/marketingsmall1image';
    $title = get_string('marketingsmall1image', 'theme_seahorse');
    $description = get_string('marketingsmall1imagedesc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketingsmall1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Marketing Sub-2 Text.
    $name = 'theme_seahorse/marketingsmall2text';
    $title = get_string('marketingsmall2text', 'theme_seahorse');
    $description = get_string('marketingsmall2textdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Marketing Sub-2 Image.
    $name = 'theme_seahorse/marketingsmall2image';
    $title = get_string('marketingsmall2image', 'theme_seahorse');
    $description = get_string('marketingsmall2imagedesc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketingsmall2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Marketing Sub-3 Text.
    $name = 'theme_seahorse/marketingsmall3text';
    $title = get_string('marketingsmall3text', 'theme_seahorse');
    $description = get_string('marketingsmall3textdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Marketing Sub-3 Image.
    $name = 'theme_seahorse/marketingsmall3image';
    $title = get_string('marketingsmall3image', 'theme_seahorse');
    $description = get_string('marketingsmall3imagedesc', 'theme_seahorse');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'marketingsmall3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);    
    
    $ADMIN->add('theme_seahorse', $temp);
	

	
	/* Social Network Settings */
	$temp = new admin_settingpage('theme_seahorse_social', get_string('socialheading', 'theme_seahorse'));
	$temp->add(new admin_setting_heading('theme_seahorse_social', get_string('socialheadingsub', 'theme_seahorse'),
            format_text(get_string('socialdesc' , 'theme_seahorse'), FORMAT_MARKDOWN)));
	
    // Facebook url setting.
    $name = 'theme_seahorse/facebook';
    $title = get_string('facebook', 'theme_seahorse');
    $description = get_string('facebookdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_seahorse/twitter';
    $title = get_string('twitter', 'theme_seahorse');
    $description = get_string('twitterdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_seahorse/googleplus';
    $title = get_string('googleplus', 'theme_seahorse');
    $description = get_string('googleplusdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_seahorse/linkedin';
    $title = get_string('linkedin', 'theme_seahorse');
    $description = get_string('linkedindesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // YouTube url setting.
    $name = 'theme_seahorse/youtube';
    $title = get_string('youtube', 'theme_seahorse');
    $description = get_string('youtubedesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Flickr url setting.
    $name = 'theme_seahorse/flickr';
    $title = get_string('flickr', 'theme_seahorse');
    $description = get_string('flickrdesc', 'theme_seahorse');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    
    $ADMIN->add('theme_seahorse', $temp);

