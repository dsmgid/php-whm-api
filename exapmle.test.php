<?php
require 'vendor/autoload.php';
use dsmg\CpanelPhp\Cpanel;
$cpanel = new Cpanel($options=array(
    'host'=>'https://localhost2087',
    'username'=>'root',
    'password'=>'TOKEN HERE',
    'auth_type'=>'hash'
));
 print_r($cpanel->listAccounts());