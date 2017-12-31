<?php
/*
 * Last Modified <!--%TimeStamp%-->10/1/2015 9:57 PM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }
?>

<div class="panel panel-default"><!-- Default panel contents -->
   
   <div class="panel-body">
      <p><img src="./img/default_profile.jpg" width="140" height="140" alt="Profile Image"  /></p>
   </div>
   
   <div class="list-group"><!-- List group -->
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>" class="list-group-item active">Home</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=basic_select" class="list-group-item">Basic Select</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=conditional_select" class="list-group-item">Conditional Select</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=table_select" class="list-group-item">Select To Table</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=dropdown_select" class="list-group-item">Dropdown Select</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=page4" class="list-group-item">Non Existant Page - 404</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=formmail" class="list-group-item">Basic Form To Email</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=error_display" class="list-group-item">Error Example</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=settings" class="list-group-item">Settings</a>
      <a href="<?= $_SERVER['SCRIPT_NAME'] ?>?p=errors" class="list-group-item">Error Log</a>
      <a href="phpinfo.php" target="_blank" class="list-group-item">Php Info</a>
   </div><!-- / List group -->
   
</div><!-- / Default panel contents -->

