<?php
Configure::write('debug', 0); 
header('Pragma: no-cache');
header('Cache-Control: no-store, no-cache, max-age=0, must-revalidate');
// Need to decide definitively if this should be 
// text/x-json or application/json
// header('Content-Type: text/html');
header('Content-Type: application/json');
// The next bit may be superfluous too if we put content in body
// There is a warning over the maximum size of this field
//header('X-JSON: '.$content_for_layout);
echo $content_for_layout;
?>