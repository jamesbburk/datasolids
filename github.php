<?php
    $output = shell_exec('ls -l /usr/local/bin');
    var_dump($output);
    $output = shell_exec('/usr/local/bin/git status');
    var_dump($output);
    $output = shell_exec('/usr/local/bin/git pull');
    var_dump($output);
    $output = shell_exec('ls -l ../');
    var_dump($output);

    $output = shell_exec('whoami');
    var_dump($output);
    $output = shell_exec('pwd');
    var_dump($output);
?>