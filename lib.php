<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();
 
// Function to return the SCSS to prepend to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function and we don't want namespace clashes.
function theme_boostplus_get_pre_scss($theme) {
    // Load the settings from the parent.                                                                                           
    $theme = theme_config::load('boost');                                                                                           
    // Call the parent themes get_pre_scss function.                                                                                
    return theme_boost_get_pre_scss($theme);                         
}

// Function to return the SCSS to append to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function and we don't want namespace clashes.
function theme_boostplus_get_extra_scss($theme) {
    // Load the settings from the parent.                                                                                           
    $theme = theme_config::load('boost');                                                                                           
    // Call the parent themes get_extra_scss function.                                                                                
    return theme_boost_get_extra_scss($theme);                         
}