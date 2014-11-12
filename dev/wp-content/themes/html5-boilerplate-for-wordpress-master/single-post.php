<?php
header("Status: 301 Moved Permanently");
//header("Location:http://blah.com");
wp_redirect(get_option('home'));
?>