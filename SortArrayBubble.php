<?php

        for ($i=0; $i<10; $i++){

            $arr[$i] = rand(10, 100);
        }
    print_r($arr);

        $countIteration = 0;

        for ($i=0; $i < count($arr)-1 ; $i++){

            $continueFlag = false;

            for ($j=0 ; $j <count($arr)-$i-1 ; $j++){

                $countIteration++;
                $elem1 = $arr[$j];
                $elem2 = $arr[$j+1];

                if ($elem1 > $elem2){
                    $arr[$j] = $elem2;
                    $arr[$j+1] = $elem1;

                    $continueFlag = true;
                }
            }
            if ($continueFlag == false) {break;}
        }

print_r($arr);
print_r("\n number of iteration is: ". $countIteration);

