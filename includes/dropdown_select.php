<?php
//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }

    $sql  = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
?>
<form class="form-horizontal" role="form" action="index.php?p=<?= $_GET['p'] ?>" method="post">

<fieldset>

<legend>Demo Select User</legend>

<h4>Selects data from database with dropdown "remember".</h4>
<h4><a href="index.php?p=show_source&s=<?= $_GET['p'] ?>">Show Source</a> </h4>

<div class="form-group">
  <label class="col-md-4 control-label" for="users">Select User</label>
  <div class="col-md-4">
    <select id="users" name="user_id" class="form-control">
    <?php
    foreach ($result as $row)
    {
        $selected = isset($_POST['user_id']) && $_POST['user_id'] == $row['user_id'] ? 'selected' : '';
        echo "<option value='{$row['user_id']}' $selected>{$row['name_first']}</option>";
    }
    ?>
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-md-offset-4 col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

<?php
if (isset($_POST['user_id']))
    {
    include_once('./includes/table_select.php');
    }
?>