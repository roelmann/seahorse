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
 * @copyright 2013 Richard Oelmann
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */

function theme_seahorse_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'backgroundtexture') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('backgroundtexture', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainmarketingimage') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('mainmarketingimage', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketingsubimage1') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('marketingsubimage1', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketingsubimage2') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('marketingsubimage2', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketingsmall1image') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('marketingsmall1image', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketingsmall2image') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('marketingsmall2image', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketingsmall3image') {
        $theme = theme_config::load('seahorse');
        return $theme->setting_file_serve('marketingsmall3image', $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_seahorse_set_logo($css, $logo) {
    global $OUTPUT;
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('logo','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
/**
 * Adds the background texture to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_seahorse_set_backgroundtexture($css, $backgroundtexture) {
    global $OUTPUT;
    $tag = '[[setting:backgroundtexture]]';
    $replacement = $backgroundtexture;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('background','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}
/**
 * Adds the main theme background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themecolor - the background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_themecolor($css, $themecolor) {
    $tag = '[[setting:themecolor]]';
    $replacement = $themecolor;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the main theme text colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themetextcolor - the main text colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_themetextcolor($css, $themetextcolor) {
    $tag = '[[setting:themetextcolor]]';
    $replacement = $themetextcolor;
    if (is_null($replacement)) {
        $replacement = '#020220';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the heading text colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeheadingtextcolor - the heading text colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_themeheadingtextcolor($css, $themeheadingtextcolor) {
    $tag = '[[setting:themeheadingtextcolor]]';
    $replacement = $themeheadingtextcolor;
    if (is_null($replacement)) {
        $replacement = '#ffffff';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the heading background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeheading1color - the primary heading background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_themeheading1color($css, $themeheading1color) {
    $tag = '[[setting:themeheading1color]]';
    $replacement = $themeheading1color;
    if (is_null($replacement)) {
        $replacement = '#070770';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the heading background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeheading2color - the secondary heading background colour (for gradients).
 * @return string The parsed CSS
 */
function theme_seahorse_set_themeheading2color($css, $themeheading2color) {
    $tag = '[[setting:themeheading2color]]';
    $replacement = $themeheading2color;
    if (is_null($replacement)) {
        $replacement = '#020220';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the block background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeblock1color - the primary block background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_themeblock1color($css, $themeblock1color) {
    $tag = '[[setting:themeblock1color]]';
    $replacement = $themeblock1color;
    if (is_null($replacement)) {
        $replacement = '#dbf6de';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the block background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeblock2color - the secondary block background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_themeblock2color($css, $themeblock2color) {
    $tag = '[[setting:themeblock2color]]';
    $replacement = $themeblock2color;
    if (is_null($replacement)) {
        $replacement = '#dbf6de';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the block background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $thememenu1color - the primary block background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_thememenu1color($css, $thememenu1color) {
    $tag = '[[setting:thememenu1color]]';
    $replacement = $thememenu1color;
    if (is_null($replacement)) {
        $replacement = '#b6ecbc';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the block background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $thememenu2color - the primary block background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_thememenu2color($css, $thememenu2color) {
    $tag = '[[setting:thememenu2color]]';
    $replacement = $thememenu2color;
    if (is_null($replacement)) {
        $replacement = '#8db5e1';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the main marketing block background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeblock1color - the primary block background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_marketingcolor1($css, $marketingcolor1) {
    $tag = '[[setting:marketingcolor1]]';
    $replacement = $marketingcolor1;
    if (is_null($replacement)) {
        $replacement = '#dbf6de';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds the secondary marketing block background colour to CSS.
 *
 * @param string $css The CSS.
 * @param string $themeblock1color - the primary block background colour.
 * @return string The parsed CSS
 */
function theme_seahorse_set_marketingcolor2($css, $marketingcolor2) {
    $tag = '[[setting:marketingcolor2]]';
    $replacement = $marketingcolor2;
    if (is_null($replacement)) {
        $replacement = '#c6daf0';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}
/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function seahorse_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
}

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_seahorse_process_css($css, $theme) {

    // Set the theme color.
    if (!empty($theme->settings->themecolor)) {
        $themecolor = $theme->settings->themecolor;
    } else {
        $themecolor = '#ffffff';
    }
    $css = theme_seahorse_set_themecolor($css, $themecolor);
    
    // Set the theme text color.
    if (!empty($theme->settings->themetextcolor)) {
        $themetextcolor = $theme->settings->themetextcolor;
    } else {
        $themetextcolor = '#020220';
    }
    $css = theme_seahorse_set_themetextcolor($css, $themetextcolor);
    
    // Set the theme heading colours (1).
    if (!empty($theme->settings->themeheading1color)) {
        $themeheading1color = $theme->settings->themeheading1color;
    } else {
        $themeheading1color = '#070770';
    }
    $css = theme_seahorse_set_themeheading1color($css, $themeheading1color);
    
    // Set the theme heading colours (2).
    if (!empty($theme->settings->themeheading2color)) {
        $themeheading2color = $theme->settings->themeheading2color;
    } else {
        $themeheading2color = '#020220';
    }
    $css = theme_seahorse_set_themeheading2color($css, $themeheading2color);
    
    // Set the theme heading text color.
    if (!empty($theme->settings->themeheadingtextcolor)) {
        $themeheadingtextcolor = $theme->settings->themeheadingtextcolor;
    } else {
        $themeheadingtextcolor = '#ffffff';
    }
    $css = theme_seahorse_set_themeheadingtextcolor($css, $themeheadingtextcolor);
    
    // Set the theme block background colours (1).
    if (!empty($theme->settings->themeblock1color)) {
        $themeblock1color = $theme->settings->themeblock1color;
    } else {
        $themeblock1color = '';
    }
    $css = theme_seahorse_set_themeblock1color($css, $themeblock1color);

    // Set the theme block background colours (2).
    if (!empty($theme->settings->themeblock2color)) {
        $themeblock2color = $theme->settings->themeblock2color;
    } else {
        $themeblock2color = '';
    }
    $css = theme_seahorse_set_themeblock2color($css, $themeblock2color);
    
    // Set the menu background colours (1).
    if (!empty($theme->settings->thememenu1color)) {
        $thememenu1color = $theme->settings->thememenu1color;
    } else {
        $thememenu1color = '';
    }
    $css = theme_seahorse_set_thememenu1color($css, $thememenu1color);

    // Set the menu background colours (2).
    if (!empty($theme->settings->thememenu2color)) {
        $thememenu2color = $theme->settings->thememenu2color;
    } else {
        $thememenu2color = '';
    }
    $css = theme_seahorse_set_thememenu2color($css, $thememenu2color);
    
    // Set the marketing block background colours (1).
    if (!empty($theme->settings->marketingcolor1)) {
        $marketingcolor1 = $theme->settings->marketingcolor1;
    } else {
        $marketingcolor1 = '#dbf6de';
    }
    $css = theme_seahorse_set_marketingcolor1($css, $marketingcolor1);

    // Set the marketing block background colours (2).
    if (!empty($theme->settings->marketingcolor2)) {
        $marketingcolor2 = $theme->settings->marketingcolor2;
    } else {
        $marketingcolor2 = '#c6daf0';
    }
    $css = theme_seahorse_set_marketingcolor2($css, $marketingcolor2);
    
    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_seahorse_set_logo($css, $logo);
    
    // Set the background texture for the page.
    $backgroundtexture = $theme->setting_file_url('backgroundtexture', 'backgroundtexture');
    $css = theme_seahorse_set_backgroundtexture($css, $backgroundtexture);
    
    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = seahorse_set_customcss($css, $customcss);

    return $css;
}


function theme_seahorse_set_navbarsep($css, $navbarsep) {
    $tag = '[[setting:navbarsep]]';
    $replacement = $navbarsep;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_seahorse_set_slideimage($css, $slideimage, $setting) {
    global $OUTPUT;
    $tag = '[[setting:'.$setting.']]';
    $replacement = $slideimage;
    if (is_null($replacement)) {
        // Get default image from themes 'images' folder of the name in $setting.
        $replacement = $OUTPUT->pix_url('images/'.$setting, 'theme');
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

