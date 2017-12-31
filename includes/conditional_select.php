<?php
/*
 * Last Modified <!--%TimeStamp%-->4/30/2016 9:59 AM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }
?>

<h1>Conditional Select</h1>
<h4>WHERE user_id =2 OR user_id=3  </h4>
<h4><a href="index.php?p=show_source&amp;s=<?= $_GET['p'] ?>">Show Source</a> </h4>

<?php
$sql  = "SELECT * FROM users WHERE user_id=? OR user_id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([2,3]);
$result = $stmt->fetchAll();

foreach ($result as $row)
    {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
    }
?>