<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
if(!empty($PAGE->theme->settings->layout)) {
    $pagelayout=$PAGE->theme->settings->layout;
    } else {
    $pagelayout='threecolhg';
}
$pagelayoutcolumns='';
if ($pagelayout=='onepre') {
    $pagelayoutcolumns='onepre';
    $pagelayout='threecolhg';
}
if ($pagelayout=='onepost') {
    $pagelayoutcolumns='onepost';
    $pagelayout='threecolhg';
}
$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT) && ($pagelayoutcolumns != 'onepost'));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT) && ($pagelayoutcolumns != 'onepre'));
$haslogininfo = (empty($PAGE->layout_options['nologininfo']));
$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));
    $hasfacebook = (!empty($PAGE->theme->settings->facebook));
    $hastwitter = (!empty($PAGE->theme->settings->twitter));
    $hasgoogleplus = (!empty($PAGE->theme->settings->googleplus));
    $haslinkedin = (!empty($PAGE->theme->settings->linkedin));
    $hasyoutube = (!empty($PAGE->theme->settings->youtube));
    $hasflickr = (!empty($PAGE->theme->settings->flickr));
    $hasfootnoteleft = (empty($PAGE->theme->settings->footnoteleft)) ? false : $PAGE->theme->settings->footnoteleft;
    $hasfootnotecenter = (empty($PAGE->theme->settings->footnotecenter)) ? false : $PAGE->theme->settings->footnotecenter;
    $hasfootnoteright = (empty($PAGE->theme->settings->footnoteright)) ? false : $PAGE->theme->settings->footnoteright;
    $hasfootnote = (!empty($PAGE->theme->settings->footnoteleft) && !empty($PAGE->theme->settings->footnotecenter) && !empty($PAGE->theme->settings->footnoteright));
    $hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}

if (check_browser_version('MSIE') && !check_browser_version('MSIE', '9.0') && !check_browser_version('MSIE', '10.0')) {
    $bodyclasses[] = 'lt-ie10';
}

$courseheader = $coursecontentheader = $coursecontentfooter = $coursefooter = '';
if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
    $courseheader = $OUTPUT->course_header();
    $coursecontentheader = $OUTPUT->course_content_header();
    if (empty($PAGE->layout_options['nocoursefooter'])) {
        $coursecontentfooter = $OUTPUT->course_content_footer();
        $coursefooter = $OUTPUT->course_footer();
    }
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>


