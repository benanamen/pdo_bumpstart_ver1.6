<?php
/*
 * Last Modified <!--%TimeStamp%-->4/18/2016 7:09 PM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }

//----------------------------------------------------------------------------------------
//
//----------------------------------------------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    $sql  = "SELECT user_id, name_first, name_last, email FROM users WHERE user_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['user_id']]);
    $result = $stmt->fetchAll();
    }
else
    {
    $sql  = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    }

if ($_GET['p']=='table_select'): ?>
<h1>Select To Table</h1>
<h4><a href="index.php?p=show_source&s=<?= $_GET['p'] ?>">Show Source</a> </h4>
<?php endif?>

<p>
   <a href="" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Add User</a>
</p>
<div class="table-responsive">
   <table class="table table-bordered table-striped table-hover table-condensed">
      <thead>
         <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th colspan="3"></th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($result as $row):?>
         <tr>
            <td><?= $row['user_id'] ?></td>
            <td><?= $row['name_first'] ?></td>
            <td><?= $row['name_last'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> View Details</button></td>
            <td><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit User</button></td>
            <td><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete User</button></td>
         </tr>
         <?php endforeach;?>
      </tbody>
   </table>
</div>