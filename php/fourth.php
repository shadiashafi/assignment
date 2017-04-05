<?php
function foo()
{
    $numargs = func_num_args();
   
    if ($numargs >= 3) {
      echo "arguments: " . func_get_arg(0) . "<br />\n";
        echo "arguments: " . func_get_arg(1) . "<br />\n";
        echo "arguments: " . func_get_arg(2) . "<br />\n";
    }
    $arg_list = func_get_args();
    $m=1;
    for ($i = 0; $i < $numargs; $i++) {
       $m=$m*$arg_list[$i];

    }
    echo "the result is:".$m;
}

foo(9, 2, 3);
?>