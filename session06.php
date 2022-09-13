<?php
session_start();
 
var_dump( $_SESSION );
 
unset( $_SESSION['bbb'] );
echo "
\n";
echo "
\n";
var_dump( $_SESSION );
?>





