<?php 

function fibonacci($n,$first = 0,$second = 1)
{
    $fib[0]=$first;
    $fib[1]=$second;
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
$num=$_POST['num'];
echo "<pre>";
print_r(fibonacci($num));
?>