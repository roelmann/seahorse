    <?php if ($hasfooter) {
    $hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;
    $hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
    $hasfacebook = (!empty($PAGE->theme->settings->facebook));
    $hastwitter = (!empty($PAGE->theme->settings->twitter));
    $hasgoogleplus = (!empty($PAGE->theme->settings->googleplus));
    $haslinkedin = (!empty($PAGE->theme->settings->linkedin));
    $hasyoutube = (!empty($PAGE->theme->settings->youtube));
    $hasflickr = (!empty($PAGE->theme->settings->flickr));
    ?>
    <footer class="clearfix">
        <div id="page-footer" class="clearfix">
            <div class="social">
            <!-- Social media icons from iconfinder.com - original source: http://www.blogperfume.com/new-27-circular-social-media-icons-in-3-sizes/ plus skype icon from http://www.yootheme.com/icons-->
                <?php if ($hastwitter){?>
                    <a href="<?php echo $PAGE->theme->settings->twitter;?>"><img src="<?php echo $OUTPUT->pix_url('social/twitter', 'theme')?>" id="Twitter"></a>
                <?php } ?>
                <?php if ($hasfacebook){?>
                    <a href="<?php echo $PAGE->theme->settings->facebook;?>"><img src="<?php echo $OUTPUT->pix_url('social/facebook', 'theme')?>" id="Facebook"></a>
                <?php } ?>
                <?php if ($haslinkedin){?>
                    <a href="<?php echo $PAGE->theme->settings->linkedin;?>"><img src="<?php echo $OUTPUT->pix_url('social/linkedin', 'theme')?>" id="LinkedIn"></a>
                <?php } ?>
                <?php if ($hasgoogleplus){?>
                    <a href="<?php echo $PAGE->theme->settings->googleplus;?>"><img src="<?php echo $OUTPUT->pix_url('social/google', 'theme')?>" id="Google+"></a>
                <?php } ?>
                <?php if ($hasyoutube){?>
                    <a href="<?php echo $PAGE->theme->settings->youtube;?>"><img src="<?php echo $OUTPUT->pix_url('social/youtube', 'theme')?>" id="YouTube"></a>
                <?php } ?>
                <?php if ($hasflickr){?>
                    <a href="<?php echo $PAGE->theme->settings->flickr;?>"><img src="<?php echo $OUTPUT->pix_url('social/flickr', 'theme')?>" id="Flickr"></a>
                <?php } ?>
            </div>
            <?php if ($hasfootnote) {
                echo '<div class="footnote">'.$hasfootnote.'</div>';
            } ?>
            <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
            <?php
                echo $OUTPUT->login_info();
                echo $OUTPUT->home_link();
                echo $OUTPUT->standard_footer_html();
            ?>
            <?php if ($hascopyright) {
                echo '<p class="copy">&copy; '.date("Y").' '.$hascopyright.'</p>';
            } ?>
        </div>
    </footer>
    <?php } ?>

</div> <!-- END #page -->
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
