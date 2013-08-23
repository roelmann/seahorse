    <header>
        <div id="page-header">
            <div id="page-header-wrapper" class="clearfix">
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

