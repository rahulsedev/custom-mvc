<?php
    require_once('../config/bootstrap.php');
    require_once('../controller/users-controller.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo APP_SETTINGS['APP_TITLE']?></title>
    <!-- Bootstrap core CSS -->
    <?php echo includeCSS('bootstrap.min');?>
    <body>
        <?php require_once('../view/header.php');?>
        <?php require_once('../view/users/users-index.php');?>    
        <?php require_once('../view/footer.php');?>
    </body>
</html>