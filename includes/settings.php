<?php
if (!defined('securepage')) {
  die('<h1>Direct File Access Prohibited</h1>');
  }
?>
<h1>SETTINGS</h1>

<dl>
  <dt><span class="label label-info"><?= date_default_timezone_get() ?> </span></dt>
  <dd>Time Zone</dd>
</dl>

<dl>
  <dt><span class="label label-<?= (LOG_ERROR==0) ? 'danger' : 'success'; ?> "><?= (LOG_ERROR==0) ? 'Off' : 'On'; ?></span></dt>
  <dd>Error Logging</dd>
</dl>

<dl>
  <dt><span class="label label-<?= (DEBUG==0) ? 'danger' : 'success'; ?> "><?= (DEBUG==0) ? 'Off' : 'On'; ?></span></dt>
  <dd>Debugging</dd>
</dl>

<dl>
  <dt><span class="label label-<?= (EMAIL_ERROR==0) ? 'danger' : 'success'; ?> "><?= (EMAIL_ERROR==0) ? 'Off' : 'On'; ?></span></dt>
  <dd>Email site errors to admin</dd>
</dl>

 <div>
<table class="table table-bordered table-striped table-hover">
  <caption>Global Settings</caption>
  <thead>
    <tr>
      <th colspan="2">Global Site Settings</th>

    </tr>
  </thead>
  <tbody class="searchable">

    <tr>
      <td>Admin Email From</td>
      <td><?= ADMIN_EMAIL_FROM ?></td>
    </tr>

    <tr>
      <td>Admin Email To</td>
      <td><?= ADMIN_EMAIL_TO ?></td>
    </tr>

    <tr>
      <td>Time Zone</td>
      <td><?= date_default_timezone_get(); ?></td>
    </tr>

    <tr>
      <td>upload_max_filesize</td>
      <td><?= ini_get('upload_max_filesize') ?></td>
    </tr>

  </tbody>
</table>

</div>

<div>
<table class="table table-bordered table-striped table-hover">
  <caption>Other Settings</caption>
  <thead>
    <tr>
      <th colspan="2">Other Site Settings</th>

    </tr>
  </thead>
  <tbody>

    <tr>
      <td>Real Path</td>
      <td><?= ABSPATH ?></td>
    </tr>

    <tr>
      <td>Error Log Path</td>
      <td><?= ERROR_LOG_PATH ?></td>
    </tr>

    <tr>
      <td>Check Setup</td>
      <td><?= check_error_log() ?></td>
    </tr>

  </tbody>
</table>

</div>
