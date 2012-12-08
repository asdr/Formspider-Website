

<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<?php include(ABSPATH . '../assets/contactmodal.php'); ?>

<?php include '../assets/footer.php'; ?>	

