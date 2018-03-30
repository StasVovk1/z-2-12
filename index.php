<?php 
    $mass = [1,1,-2,4,3,4,53,4,5,3,2,-5,-65,-6,7,4,5,9,0,1];
    echo 'Исходные данные: '.json_encode($mass);

    $min = $mass[0];   
    $max = 0;
    for ($i = 0; $i < counts($mass); $i++){        
        if ($mass[$i] < $min && $mass[$i] > 0){     
            $min = $mass[$i];
        }  
        if ($max == 0 && $mass[$i] < 0){    
            $max = $mass[$i];
        }        
        if($mass[$i] > $max && $mass[$i] < 0){
            $max = $mass[$i];
        }
    }

    echo '<br>Ответ: <br> Наибольший из всех отрицательных элементов : '.$max.' <br>  наименьший из всех положительных: '.$min;
    
    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>