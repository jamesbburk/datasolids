<?php
`/usr/local/bin/git pull`;
$output = shell_exec('/usr/local/bin/git pull');
var_dump($output);
$output = shell_exec('git pull');
var_dump($output);
$output = shell_exec('ls');
echo "<pre>$output</pre>";

//phpinfo();
?>