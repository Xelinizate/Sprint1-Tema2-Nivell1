
    <?php

        $num;
        $interval;
        
        function contar($num = 10, $interval = 1){
            if($interval == 0){
                echo "L'interval no potser 0";
                return;
            }
            for($i = 1; $i <= $num; $i += $interval){
                echo $i . "<br>";
            }
        }
        
        contar();
        echo "<br>";
        contar(15,5);
        echo "<br>";
        contar(100,10);
        echo "<br>";

    ?>
