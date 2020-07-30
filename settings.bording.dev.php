<?php

define("env","local");

$databases['default']['default']["database"] = "bording_backup";
$databases['default']['default']["username"] = "bording";
$databases['default']['default']["password"] = "bording";


$settings['file_public_path'] = 'public'; 
$settings['file_public_base_url'] = '//bording.dev/public';
$settings['file_private_path'] = '../private/';


$settings['trusted_host_patterns'] = [
    '^bording\.dev$',
    '^.+\.bording\.dev$', 
    '^bording\.dev$',
    '^.+\.bording\.dev$',
 ];

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$config['system.logging']['error_level'] = 'verbose';

$settings['twig_debug'] = TRUE;


$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0775;


$settings['middleware_service'] = 'http://middleware.dev/';  


$config_directories['sync'] = 'public/config_dev_mHvanfSyLlgT-7HQjgMEqwhLmaq3uxfH85xV9qiTxxnos2YdrEo8AzHqR-ZCsdpg3PC81hsIvg/sync';
