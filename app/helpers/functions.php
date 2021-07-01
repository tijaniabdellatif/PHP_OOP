<?php


function debug($vars)
{

    echo "<pre>";

    var_dump($vars);

    echo "</pre>";

    exit;
}


function debugArray($vars)
{

    echo "<pre>";

    print_r($vars);

    echo "</pre>";

    exit;
}


function createArray($delimiter,$str)
{

    $array = explode($delimiter,$str);
    $i=0;
    for($j=0;$j<count($array);$j++)
    {
        if ($delimiter === ' ') {
            return $array[$j];
            
        } else if ($delimiter === ',') {
            
            return $array[$j];
            
        }
    }
   

}
