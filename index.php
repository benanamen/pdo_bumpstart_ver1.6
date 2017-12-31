<?php
//----------------------------------------------------------------------------------------
// Allow direct access to this page
//----------------------------------------------------------------------------------------

define('securepage', true);

//----------------------------------------------------------------------------------------
// Include page display logic
//----------------------------------------------------------------------------------------

require './config.php';
require './includes/display_pages.php';

//----------------------------------------------------------------------------------------
// Include Page Header
//----------------------------------------------------------------------------------------

include'./includes/header.php';
?>

   <?php include './includes/navbar.php'; ?>
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <?php include './includes/menu.php'; ?>
         </div>
         <div class="col-md-9">
            <?php include"$include"; ?>
         </div><!-- /.col-md-9 -->
      </div><!-- /.row -->
    </div> <!-- /.container -->
    <?php include './includes/footer.php'; ?>