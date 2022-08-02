<footer class="site-footer">
<section class="container col-three">
<div class="footer--social">
<a class="socials" href="#" target="_blank" aria-label="LinkedIn" rel="noopener"><span class="icon-social">LinkedIn</span></a>
<a class="socials" href="#" target="_blank" aria-label="LinkedIn" rel="noopener"><span class="icon-social">Youtube</span></a>
<a class="socials" href="#" target="_blank" aria-label="LinkedIn" rel="noopener"><span class="icon-social">Twitter</span></a>
</div>
<div class="footer--menu">
<div class="sitemap">Sitemap:</div>
<?php wp_nav_menu(array(
'theme_location' => 'main', 
'container' => false, 
'menu_class' => 'menu-items', 
)); 
?>
</div>
<div class="copyright"><p class="no-top">Starter © All Rights Reserved 2022<br>Website by <a href="#">Jeremy Faucher</a></p></div>
</section>
</footer>
<?php wp_footer(); ?>
</body>
</html>