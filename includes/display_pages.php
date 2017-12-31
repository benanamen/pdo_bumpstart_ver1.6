<?php
/*
 * This file: display_pages.php
 * Acts as a Router to display pages
 * Restricts access to certain files
 *
 * Last Modified <!--%TimeStamp%-->2/23/2014 10:40 AM<!---->
 */

//------------------------------------------------------------------------
// Restrict access to these files
//------------------------------------------------------------------------

// Specify some disallowed paths
$restricted_files = array(
    'header',
    'footer',
    'navbar',
    'menu'
);

//----------------------------------------------------------------------------------------
// Display Pages
//----------------------------------------------------------------------------------------

if (isset($_GET['p']))
    {
    $page = basename($_GET['p']);

    if (!in_array($page, $restricted_files) && file_exists("./includes/$page.php"))
        {
        $include = "./includes/$page.php";
        }
    else
        {
        $include = './includes/404.php'; // Page Not Found
        }
    }
else
    {
    $include = './includes/default.php';
    }