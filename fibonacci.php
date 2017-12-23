
<!--printing Fibonacci series using php function-->

<?php
echo "Fibonacci Series : ";

function fibonacci_series($num){
    $a=0;
    $b=1;
    $result=0;
    for($i=0; $i<=$num; $i++)
    {
        if($i<=1){
            $result=$i;
        }  else {
            $result=$a+$b;
            $a=$b;
            $b=$result;
        }
        echo $result.",";
    }
}
fibonacci_series(10);

?>