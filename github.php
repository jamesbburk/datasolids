<?php
$output = shell_exec('git pull');
$output .= shell_exec('ls');
echo "<pre>$output</pre>";

//phpinfo();
?>