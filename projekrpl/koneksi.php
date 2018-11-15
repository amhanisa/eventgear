<?php
debug_backtrace() || die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
define('HOST','localhost');
define('USER','root'); //sesuaikan nama user
define('PASS','sus'); //sesuaiakan nama password
define('DB','eventgear');//sesuaiakan naman database
$conn = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
date_default_timezone_set("Asia/Jakarta");

?>