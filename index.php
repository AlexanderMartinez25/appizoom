<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config.php';
 
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URI;
?>
  
<a href="<?php echo $url; ?>">Login with Zoom</a>