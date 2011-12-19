<?php
echo "start";
echo "1";
`/usr/local/bin/git pull`;
echo "2";
`git pull`;
echo "3";
$output = shell_exec('/usr/local/bin/git pull');
var_dump($output);
echo "4";
$output = shell_exec('git pull');
var_dump($output);
echo "5";
$output = shell_exec('ls');
echo "<pre>$output</pre>";

//phpinfo();
?>