<?php
/*
 * Last Modified <!--%TimeStamp%-->10/1/2015 10:12 PM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }

//----------------------------------------------------------------------------------------
// Clear Error Log File
//----------------------------------------------------------------------------------------

$show_how_many_errors = 4;
$error_log_filesize = filesize(ERROR_LOG_PATH);

if (isset($_GET['deleted']))
    {
    if ($error_log_filesize > 0)
        {
        $file = fopen(ERROR_LOG_PATH, 'w');
        fclose($file);
        die(header("Location: {$_SERVER['SCRIPT_NAME']}?p={$_GET['p']}"));
        }
    }
?>
<h1>Error Log</h1>

<div class="well">
   <table class="table table-bordered table-striped table-hover">
      <caption></caption>
      <thead>
         <tr>
            <th>Last <?= $show_how_many_errors ?> Errors  - <a href="index.php?p=errors&deleted" title="Delete Errors">Delete Errors</a></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>
               <textarea title ="Errors" rows="10" disabled style="width:100%"><?= trim(implode("\n", array_slice(file(ERROR_LOG_PATH), -$show_how_many_errors))); //Show last X line of error log?></textarea>
            </td>
         </tr>
      </tbody>
   </table>
</div>

<div class="well">
   <table class="table table-bordered table-striped table-hover">
      <thead>
         <tr>
            <th colspan="2">Error Log Settings</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td>Error Log Path</td>
            <td><?= ERROR_LOG_PATH ?></td>
         </tr>
         <tr>
            <td>Check Setup</td>
            <td><?php check_error_log();?></td>
         </tr>
      </tbody>
   </table>
</div>