<?php
if (!defined('securepage')) {
  die('<h1>Direct File Access Prohibited</h1>');
  };
?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="index.php"><?= APP_NAME ?> <?= VERSION ?></a>
      </div>
      <div class="collapse navbar-collapse">
         <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Some User</a></p>
      </div>
   </div>
</div>

