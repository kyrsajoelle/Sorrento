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

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo" style="text-align:center;">
			
			<div class="site-info cf">
       
        <section class="footer-info"> 
            <strong>Clinical Trials</strong><br />
            <a href="mailto:clinicaltrials@sorrentotherapeutics.com" target="_blank">clinicaltrials@sorrentotherapeutics.com</a>
        </section>
        
        <section class="footer-info">
            <strong>Investors</strong><br />
            <a href="mailto:investors@sorrentotherapeutics.com" target="_blank">investors@sorrentotherapeutics.com</a>
        </section> 
        
        <section class="footer-info">
            <strong>Business Development</strong><br />
            <a href="mailto:business@sorrentotherapeutics.com" target="_blank">business@sorrentotherapeutics.com</a>
        </section> 
			
			</div><!-- .site-info -->
<div class="footer-lower"><?php

			echo "&copy;&nbsp;".date('Y')." Sorrento Therapeutics";
			
			wp_nav_menu(array('menu' => 'Footer'));
		?>
        
        <ul class="footer-social-media cf">
        	<!--<li class="twitter"><a href="">Twitter</a></li>
            <li class="facebook"><a href="">Facebook</a></li> -->
            <li class="linkedin"><a href="https://www.linkedin.com/company/sorrento-therapeutics-inc.">LinkedIn</a></li>
            <!--<li class="youtube"><a href="https://www.youtube.com/">Youtube</a></li>-->
        </ul></div>
		</footer><!-- #colophon -->
		
	</div><!-- #page -->

	<?php wp_footer(); ?>
	</div>
	

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-40007113-1', 'sorrentotherapeutics.com');
  ga('send', 'pageview');


</script>
</body>
</html>