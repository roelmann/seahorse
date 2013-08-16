<?php
include ('preheader.php'); //All the standard logic, <head> and <body> content is in here.
?>
<?php
/* Set content files */
$hasmainmarketingtext = (!empty($PAGE->theme->settings->mainmarketingtext));
$hasmainmarketingimage = (!empty($PAGE->theme->settings->mainmarketingimage));
$hasmarketingsubimage1 = (!empty($PAGE->theme->settings->marketingsubimage1));
$hasmarketingsubimage2 = (!empty($PAGE->theme->settings->marketingsubimage1));
$hasmarketingsmall1text = (!empty($PAGE->theme->settings->marketingsmall1text));
$hasmarketingsmall1image = (!empty($PAGE->theme->settings->marketingsmall1image));
$hasmarketingsmall2text = (!empty($PAGE->theme->settings->marketingsmall2text));
$hasmarketingsmall2image = (!empty($PAGE->theme->settings->marketingsmall2image));
$hasmarketingsmall3text = (!empty($PAGE->theme->settings->marketingsmall3text));
$hasmarketingsmall3image = (!empty($PAGE->theme->settings->marketingsmall3image));
/* Default images are from flickr - creative commons attributions to:
 * http://www.flickr.com/photos/oscaralexander/
 * http://www.flickr.com/photos/edbierman/
 * http://www.flickr.com/photos/lyng833  */

if ($hasmainmarketingimage) {
    $mainmarketingimage = $PAGE->theme->setting_file_url('mainmarketingimage', 'mainmarketingimage');
    } else {
        $mainmarketingimage = $OUTPUT->pix_url('marketing/marketing1', 'theme');
}
if ($hasmainmarketingtext) {
    $mainmarketingtext = $PAGE->theme->settings->mainmarketingtext;
    } else {
    $mainmarketingtext = 'main marketing block test text';
}
if ($hasmarketingsubimage1) {
    $marketingsubimage1 = $PAGE->theme->setting_file_url('marketingsubimage1', 'marketingsubimage1');
    } else {
        $marketingsubimage1 = $OUTPUT->pix_url('marketing/marketing2', 'theme');
    }
if ($hasmarketingsubimage2) {
    $marketingsubimage2 = $PAGE->theme->setting_file_url('marketingsubimage2', 'marketingsubimage2');
    } else {
        $marketingsubimage2 = $OUTPUT->pix_url('marketing/marketing3', 'theme');
    }
if ($hasmarketingsmall1image) {
    $marketingsmall1image = $PAGE->theme->setting_file_url('marketingsmall1image', 'marketingsmall1image');
    } else {
        $marketingsmall1image = $OUTPUT->pix_url('marketing/marketingsmall1', 'theme');
    }
if ($hasmarketingsmall1text) {
    $marketingsmall1text = $PAGE->theme->settings->marketingsmall1text;
    } else {
    $marketingsmall1text = '<p>marketingsmall1 test text</p>';
    }
if ($hasmarketingsmall2image) {
    $marketingsmall2image = $PAGE->theme->setting_file_url('marketingsmall2image', 'marketingsmall2image');
    } else {
        $marketingsmall2image = $OUTPUT->pix_url('marketing/marketingsmall2', 'theme');
    }
if ($hasmarketingsmall2text) {
    $marketingsmall2text = $PAGE->theme->settings->marketingsmall2text;
    } else {
    $marketingsmall2text = '<p>marketingsmall2 test text</p>';
    }
if ($hasmarketingsmall3image) {
    $marketingsmall3image = $PAGE->theme->setting_file_url('marketingsmall3image', 'marketingsmall3image');
    } else {
        $marketingsmall3image = $OUTPUT->pix_url('marketing/marketingsmall3', 'theme');
    }
if ($hasmarketingsmall3text) {
    $marketingsmall3text = $PAGE->theme->settings->marketingsmall3text;
    } else {
    $marketingsmall3text = '<p>marketingsmall3 test text</p>';
    }
?>
<div id="page">
    <?php
    include ('header.php'); //The standard header for every page.
    ?>

    <?php if (!empty($courseheader)) { ?> <!-- Course header callback -->
        <div id="course-header"><?php echo $courseheader; ?></div>
    <?php } ?> <!-- End if course header -->
    
    <div id="page-content">
            <div class='marketingone clearfix'>
                <div class='marketingoneimagelarge'>
                     <img <?php echo 'src='.$mainmarketingimage.' id="image1"';?>>
                </div>
                <div class="marketingonetext">
                     <?php echo $mainmarketingtext;?>
                </div>
                <div class='marketingoneimagesmall'>
                     <img <?php echo 'src='.$marketingsubimage1.' id="image1"';?>>
                     <img <?php echo 'src='.$marketingsubimage2.' id="image1"';?>>
                </div>
            </div>
            <div class='marketingtwo clearfix'>
                <div class='marketingtwobox'>
                    <img <?php echo 'src='.$marketingsmall1image.' id="image1"';?>><?php echo $marketingsmall1text;?>
                </div>
                <div class='marketingtwobox'>
                     <img <?php echo 'src='.$marketingsmall2image.' id="image1"';?>><?php echo $marketingsmall2text;?>
                </div>
                <div class='marketingtwobox'>
                     <img <?php echo 'src='.$marketingsmall3image.' id="image1"';?>><?php echo $marketingsmall3text;?>
                </div>
            </div>
            
        <div id='outerwrapper' <?php echo 'class = '.$pagelayout?> >
            <section class='main'>
                <article class='mainsection'>
                    <div id="region-main">
                        <div class="region-content">
                            <?php echo $coursecontentheader; ?>
                            <?php echo $OUTPUT->main_content() ?>
                            <?php echo $coursecontentfooter; ?>
                        </div> <!-- Close region-content. -->
                    </div> <!-- Close region-main. -->
                </article> <!-- Close article mainsection. -->
            </section> <!-- Close section main. -->
            
            <?php if ($hassidepre) { ?>
                <aside class='pre'>
                    <div id="region-pre" class="block-region">
                        <div class="region-content">
                            <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
                        </div> <!-- Close region-content. -->
                    </div> <!-- Close region-pre block-region. -->
                </aside> <!-- Close aside pre. -->
            <?php } ?> <!-- End if sidepre. -->
            
            <?php if ($hassidepost) { ?>
                <aside class='post'>
                    <div id="region-post" class="block-region">
                        <div class="region-content">
                            <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                        </div> <!-- Close region-content. -->
                    </div> <!-- Close region-post block-region. -->
                </aside> <!-- Close aside post. -->
            <?php } ?> <!-- End if sidepost. -->
        </div> <!-- Close div outerwrapper -->
    </div> <!-- Close div page-content -->

    <?php if (!empty($coursefooter)) { ?> <!-- Course footer callback -->
        <div id="course-footer"><?php echo $coursefooter; ?></div>
    <?php } ?><!-- End if course header -->

<?php
include ('footer.php');
?>
