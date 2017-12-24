<!--pyramid printing using php-->

<?php

//pyramid printing with *

for ($i=0; $i<10; $i++){
    for($j=0; $j<$i; $j++)
    {
        echo "*";
    }
    echo "<br>";
}

//pyramid printing with same number

for ($i=0; $i<10; $i++){
    for($j=0; $j<$i; $j++)
    {
        echo $i." ";
    }
    echo "<br>";
}

//pyramid printing with different number

for ($i=0; $i<10; $i++){
    for($j=1; $j<$i; $j++)
    {
        echo $j." ";
    }
    echo "<br>";
}

?>