<?php
/*
Plugin Name: TechLife WebMaster Tools Plugin
Plugin URI: http://www.techlife.mx
Description: Add some tools useful to webmasters such as google analytis integration, google search console and tag manager 
Author: Juan Amador | TechlifeMX
Version: 1.0
 */function wptehclife_wbmastertool() { ?>
 <!--Webmaster code  by TechLifeMX-->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75617820-1', 'auto');
  ga('send', 'pageview');

</script>

 <?php }
add_action( 'wp_head', 'wptehclife_wbmastertool', 10 );