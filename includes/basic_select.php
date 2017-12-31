<?php
/*
 * Last Modified <!--%TimeStamp%-->10/1/2015 8:19 PM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }
?>

<h1>Array From Users Table</h1>
<h4><a href="index.php?p=show_source&amp;s=<?= $_GET['p'] ?>">Show Source</a> </h4>
<?php
$sql = "SELECT user_id, username, password, name_first, name_middle, name_last, email FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $row)
    {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
    }
?>