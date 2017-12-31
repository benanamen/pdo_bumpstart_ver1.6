<?php
/*
 * Last Modified <!--%TimeStamp%-->10/1/2015 8:22 PM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }

// Ternary Example
isset($_GET['s']) ? show_source($_GET['s'].'.php'): FALSE;
