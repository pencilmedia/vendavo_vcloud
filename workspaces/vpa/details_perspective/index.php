<?php
    // SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("../../../assets/config.inc");
    $ROOT = '../../../'; // Set root for relative paths
    $thisPage=marginOppsTitle;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo marginOppsTitle ?></title>
    <?php include("../../../assets/head.inc.php"); ?>
    <!-- Specific Workspace Styles -->
    <link rel="stylesheet" type="text/css" <?php echo 'href="' . $ROOT . 'assets/css/midas.css"' ?> >
  </head>
  <body>
    <!-- Navbar -->
    <?php include("../../../vshell/navbar.inc.php"); ?>
    <?php include("../../../vshell/navbar_menus.inc.php"); ?>
    <!-- Content Container -->
    <?php include("../../../vshell/content.inc.php"); ?>
    <?php include("../../../vshell/switcher.inc.php"); ?>
    <main class="cloudshellWork">
      <?php include("perspective_details.inc.php"); ?>
      <?php include("rt_panel_perspective_details.inc.php"); ?>
      <?php include("../popovers_and_modals.inc.php"); ?>
      <!-- //////////////// -->
      <!-- MODAL TOURS -->
      <?php include("../../../vshell/tours/tours.inc.php"); ?>
      <!-- //////////////// -->
    </main>
    <?php include("../../../assets/javascripts.inc.php"); ?>
    <!-- App: Midas -->
    <script type="text/javascript" <?php echo 'src="' . $ROOT . 'workspaces/vpa/index.js"' ?>></script>
    <script type="text/javascript" <?php echo 'src="' . $ROOT . 'workspaces/vpa/details/highcharts_details.js"' ?>></script>
  </body>
</html>
