    <header>
        <div id="page-header">
            <div id="page-header-wrapper" class="clearfix">
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
                        <?php echo ' ';?><!--Ensures something is present even if no icons are to maintain the spacing so the div doesn't collapse with no content-->
                    </div>
                <h1 class="headermain"><?php echo $PAGE->heading ?></h1>
                <div class="headermenu">

                    <?php
                        echo $OUTPUT->login_info();
                           if (!empty($PAGE->layout_options['langmenu'])) {
                               echo $OUTPUT->lang_menu();
                           }
                           ?>
                           <div class="navbutton"> <?php echo $PAGE->button; ?></div>
                           <?php
                           echo $PAGE->headingmenu;
                    ?>
                </div> <!-- Close headermenu. -->
                <?php
                    if (check_browser_version('MSIE') && !check_browser_version('MSIE', '9.0') && !check_browser_version('MSIE', '10.0')) {
                        ?>
                        <p style="color:#fff;">This theme is designed for use primarily with Modern versions of the major browsers and their mobile equivalents (Firefox22+, Chrome24+, IE10+). If possible update or change your browser - alternatively consider installing <a href="http://www.google.com/chromeframe">chromeframe</a> for older IE versions</p>
                        <?php
                    }
                ?>
            </div> <!-- Close page-header-wrapper -->
        </div> <!-- Close page-header -->
    </header>

    <?php if ($hascustommenu) { ?>
        <nav id='menu'>
            <div id="custommenu"><?php echo $custommenu; ?></div>
        </nav>
    <?php } ?>

    <?php if ($hasnavbar) { ?>
        <nav id='breadcrumb'>
            <div class="navbar clearfix">
                <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
            </div>
        </nav>
    <?php } ?>

