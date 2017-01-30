<?php
/**
 * Le pied de page du site
 *
 * @package lambertjp
 */
?>
<footer class="bottom" role="contentinfo">
    <div class="container">
        <section class="vcard col-sm-3">
            <header>
                <h1>Contact</h1>
            </header>
            <p class="fn">Jean-Philippe Lambert<p>
            <a href="mailto://jipi.lambert@gmail.com">Me joindre</a>
            <p class="tel">+1 581.983.1817</p>
            <p class="social">
                <a href="http://www.linkedin.com/pub/jean-philippe-lambert/16/556/919" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
                <a href="https://github.com/Lunatikzx" target="_blank"><i class="fa fa-github fa-3x"></i></a>
            </p>
        </section>
        <section class="col-sm-3"></section>
        <section class="col-sm-6"></section>
    </div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/smoothscroll.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
