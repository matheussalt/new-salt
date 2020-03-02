<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <? // echo do_shortcode(''); ?>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.js"></script>
<!-- <script src="./3djs/mtl.js"></script>
<script src="./3djs/obj.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

<script src="<?=get_template_directory_URI()?>/app/app.js" type="module"></script>

<?php wp_footer(); ?>

</body>

</html>