<!--pyramid printing using php-->

<?php

for ($i=0; $i<10; $i++){
    for($j=0; $j<$i; $j++)
    {
        echo "*";
    }
    echo "<br>";
}
for ($i=0; $i<10; $i++){
    for($j=0; $j<$i; $j++)
    {
        echo $i." ";
    }
    echo "<br>";
}
for ($i=0; $i<10; $i++){
    for($j=1; $j<$i; $j++)
    {
        echo $j." ";
    }
    echo "<br>";
}

?>