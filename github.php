<?php
$output = shell_exec('/usr/local/bin/git pull');
$output .= shell_exec('ls');
echo "<pre>$output</pre>";

//phpinfo();
?>