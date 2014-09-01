<?php
if($_SERVER['SERVER_NAME'] == 'localhost'){
$config = array();
$config['host'] = 'localhost';
$config['user'] = 'admin';
$config['pass'] = 'pass';
$config['database'] = 'scapecat';
$config['baseurl'] = $_SERVER["REQUEST_URI"];

} elseif($_SERVER['SERVER_NAME'] == 'remote-example.org'){
//This in file for config info
$config = array();
$config['host'] = 'localhost';
$config['user'] = 'fillme';
$config['pass'] = 'fillme';
$config['database'] = 'fillme';
$config['baseurl'] = 'http://fillme';
}
?>
