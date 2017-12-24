
<html>
    <head>
        <title>Odd-even numbers</title>
    </head>
    <body>
        <form action="" method="post">
            <div>
                <label>First Number : </label>
                <input type="text" name="first_number">
            </div>
            <div>
                <label>2nd Number : </label>
                <input type="text" name="second_number">
            </div>
            <div>
                <button type="submit" name="btn">Submit</button>
            </div>
        </form>
        
        <hr>
        <!--Print even number between two given value-->
        
        <?php
        if (isset($_POST['btn'])) {
            $first_num = $_POST['first_number'];
//   echo "<br>";

            $second_num = $_POST['second_number'];
            echo  "Even number between" . " " . $first_num . " to " . $second_num . " is : " ;
            for ($i = $first_num; $i <= $second_num; $i++) {
                if (($i % 2) == 0) {
                    echo $i . " , ";
                } else {
                    continue;
                }
            }
        }
        echo "<hr>";
        
//        Print ODD number between two number
        
        echo "ODD number between 0 to 100 is : ";
        for($i=0;$i<=100;$i++){
            if (($i % 2) != 0) {
                    echo $i . " , ";
                } else {
                    continue;
                }
        }
        
        ?>

    </body>
</html>