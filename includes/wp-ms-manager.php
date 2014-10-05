<?php

class WpMsManager{

  public function __construct(){
    add_action( 'wp_footer', array( $this, 'google_analytics' ) );
    add_action( 'admin_footer', array( $this, 'google_analytics' ) );
    add_action( 'admin_footer', array( $this, 'disable_content' ) );
  }

  public function google_analytics(){
    ?>
    <script text="type/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-55445011-1', 'auto');
      ga('send', 'pageview');
    </script>
    <?php
  }

  public function disable_content(){
    """
      Here we'll hide sections of the admin from users.
    """
    $user = wp_get_current_user();
    // echo "<pre>"; print_r( $user ); die();;
    ?>
    <style type="text/css">
    </style>
    <?php
  }

}