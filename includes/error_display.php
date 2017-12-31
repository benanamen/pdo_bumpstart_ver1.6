<?php
/*
 * Last Modified <!--%TimeStamp%-->10/1/2015 8:29 PM<!---->
 */

//----------------------------------------------------------------------------------------
// Block Direct Access
//----------------------------------------------------------------------------------------

if (!defined('securepage'))
    {
    die('<h1>Direct File Access Prohibited</h1>');
    }
?>

<h1>Error Example</h1>
* Debugging must be on in config.php to show details. Additional display if logging and email admin options set.
<h4><a href="index.php?p=show_source&s=<?= $_GET['p'] ?>">Show Source</a> </h4>
<?php
// Select from table that doesn't exist. Generate error.
$sql  = "SELECT * FROM X";
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