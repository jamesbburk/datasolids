<?php
$output = shell_exec('/usr/local/bin/git pull');
$output .= shell_exec('ls');
$output .= shell_exec('which git');
echo "<pre>$output</pre>";

//phpinfo();
?>