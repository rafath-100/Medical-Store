<?php
session_start();
session_destroy();
echo "<script> alert('Signed Out Successfully');
      window.location.href='../index.php';
      </script>";

?>
