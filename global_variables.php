<?php
$a = 10;
$b = 20;
function numbers(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];//declaring global variables
    echo $GLOBALS['c'];
}
numbers();
echo $c;//we can access global variables anywhere.


//$server
echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo("<br>");
define('pi','3.14','case-insensitive');//constant defining
echo PI;
?>
