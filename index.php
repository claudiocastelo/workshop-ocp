<?php
echo "<h1>Openshift Workshop v1.0</h1> ";
echo $_SERVER['SERVER_ADDR'];
$output = shell_exec('hostname');
echo "<pre>$output</pre>";
?>
