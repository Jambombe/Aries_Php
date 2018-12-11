<?php


/**
 * 
 * @param type $array
 * 
 * Return 1 si trié ordre croissant, 2 oordre décroissant, 3 non trié
 */
function sortType($array)
{
    
    $tri = 1;
    
    for ($i = 0; $i < sizeof($array); $i++)
    {
        if ($i+1<=sizeof($array)-1)
        {
            if (($array[$i] > $array[$i+1]) && $i+1<=sizeof($array)-1){
                $tri = 2;
                break;
            }
        }
    }
    
    if ($tri != 1)
    {
        for ($i = 0; $i < sizeof($array); $i++)
        {
            if ($i+1<=sizeof($array)-1)
            {
                if ($array[$i] < $array[$i+1] && $i+1<=sizeof($array)-1){
                    $tri = 3;
                    break;
                }
            }
        }
    }
    
    return $tri;
    
}


$arrayCroissant = array(1,2,3,4,5,6);
$arrayDeroissant = array(6,5,4,3,2,1);
$arrayQQ= array(1,2,3,8,5,6);

echo print_r($arrayCroissant) . sortType($arrayCroissant);
echo sortType($arrayDeroissant);
echo sortType($arrayQQ);