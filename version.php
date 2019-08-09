<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.
// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

$plugin->version = '2019080902';
$plugin->requires = '2019052000';
$plugin->component = 'theme_boostplus';
$plugin->dependencies = [
    'theme_boost' => '2016102100'
];
