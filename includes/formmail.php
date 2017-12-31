<?php
//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }


if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    $formdata = "{$_POST['name']}\n";
    $formdata .= "{$_POST['email']}\n";
    $formdata .= $_POST['comments'];

    echo "Form has been submitted. If you set the ADMIN_EMAIL_TO variable in config.php an email will be sent to that address.";
    mail(ADMIN_EMAIL_TO, "PDO Bumpstart Form Demo", $formdata, "From:" . ADMIN_EMAIL_FROM . "\r\n");
    }
?>
<form class="form-horizontal" role="form" action="index.php?p=formmail" method="post">
<fieldset>

<legend>Demo Form</legend>
 <h4><a href="index.php?p=show_source&amp;s=<?= $_GET['p'] ?>">Show Source</a> </h4>
<p>* Be sure to set ADMIN_EMAIL_TO in config.php to get email. (Requires SMTP or equivalent) <br>* There is no data sanitizing. Never trust user input.</p>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name"></label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Name</span>
      <input id="name" name="name" class="form-control" placeholder="First Name" type="text">
    </div>
    <p class="help-block">Enter First Name</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email *</label>
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
  <span class="help-block">Enter Email Here</span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="comments">Comments</label>
  <div class="col-md-4">
    <textarea class="form-control" id="comments" name="comments"></textarea>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Submit</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>