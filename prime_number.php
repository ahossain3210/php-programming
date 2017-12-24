<html>
    <head>
        <title>Prime numbers</title>
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
            echo  "Prime number between" . " " . $first_num . " to " . $second_num . " is : " ;
            for ($i=$first_num; $i <=$second_num; $i++) {
                for($j=2; $j<=$second_num; $j++){
                    if($i%$j==0){
                        break;
                    }
                }
                if($i==$j){
                    echo $i." , ";
                }
            }
        }
        
        ?>
        
    </body>
</html>