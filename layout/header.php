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

