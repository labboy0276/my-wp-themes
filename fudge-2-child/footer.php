<?php
$ef_options      = EF_Event_Options::get_theme_options();
$logo           = get_stylesheet_directory_uri() . '/img/logo.png';
$custom_logo_url = !empty($ef_options['ef_header_logo']) ? $ef_options['ef_header_logo'] : $default_logo;
?>
</div>
<!-- /site__content -->
<footer class="site__footer">
    <center>
        <h3>Copyright © 2012-<?php echo date("Y"); ?> South Florida Region of NA</h3>
    </center>
</footer>
<!-- /site__footer -->

<!-- site__increase -->
<div class="site__increase"></div>
<!-- /site__increase -->

</div>
<!-- /site -->
<?php wp_footer(); ?>
</body>
</html>
