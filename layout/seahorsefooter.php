    <?php if ($hasfooter) {

    ?>
    <footer class="clearfix">
        <div id="page-footer" class="clearfix">

            <?php if ($hasfootnote) {
                echo '<div class="footnotes">';
                    echo '<div class="footnoteleft">'.$hasfootnoteleft.'</div>';
                    echo '<div class="footnotecenter">'.$hasfootnotecenter.'</div>';
                    echo '<div class="footnoteright">'.$hasfootnoteright.'</div>';
                echo '</div>';
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
