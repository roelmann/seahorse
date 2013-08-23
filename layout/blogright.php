<?php
include ('preheader.php'); //All the standard logic, <head> and <body> content is in here.
?>

<div id="page">
    <?php
    include ('seahorseheader.php'); //The standard header for every page.
    ?>

    <?php if (!empty($courseheader)) { ?> <!-- Course header callback -->
        <div id="course-header"><?php echo $courseheader; ?></div>
    <?php } ?> <!-- End if course header -->
    
    <div id="page-content" class="clearfix">
        <div id='outerwrapper' class='blogright'>
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
include ('seahorsefooter.php');
?>
