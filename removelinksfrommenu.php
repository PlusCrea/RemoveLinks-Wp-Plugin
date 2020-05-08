<?php
/*
Plugin Name:Remove Links From Admin Menu
Plugin URI:
Description: Remove Links From Admin Menu
Version: 1.0
Author: Ali YAKAR
Author URI: http://pluscrea.net
License: GPLv2
*/


//you can add or remove menus and sub menus
function remove_menus()
{
    //remove_menu_page('index.php');                  //Dashboard
    //remove_menu_page('edit.php');                   //Posts
    //remove_menu_page('upload.php');                 //Media
    //remove_menu_page('edit.php?post_type=page');    //Pages
    remove_menu_page('edit-comments.php');          //Comments
    //remove_menu_page('themes.php');                 //Appearance
    //remove_menu_page('plugins.php');                //Plugins
    remove_menu_page('users.php');                  //Users
    remove_menu_page('tools.php');                  //Tools
    //remove_menu_page('options-general.php');        //Settings 
    //remove_submenu_page('themes.php', 'widgets.php'); //Widgets 
    remove_submenu_page('options-general.php', 'options-discussion.php'); //Discussion 
    remove_submenu_page('options-general.php', 'options-privacy.php'); //Privacy 

    //Background, header
    global $submenu;
    //unset($submenu['themes.php'][6]); // customize
    //unset($submenu['themes.php'][15]); // header_image
    unset($submenu['themes.php'][20]); // background_image

}

add_action('admin_menu', 'remove_menus');
