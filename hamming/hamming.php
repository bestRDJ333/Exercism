<?php

//echo 'gmp_hamdist';

//$count = distance('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');
//echo $count;



$a = [1, 2, 3];

foreach($a as $k){
    echo $k;
}


/*
function distance(string $strandA, string $strandB) : int
{
    $strandANew = str_split($strandA, 1);
    $strandBNew = str_split($strandB,1);
    $counts = 0;

    $len = (count($strandANew) >= count($strandBNew))? count($strandANew): count($strandBNew);

    for($i = 0; $i < $len; $i++){
        if($strandANew[$i] != $strandBNew[$i]){
            $counts++;
        }
    }
    return $counts;
}
*/

/* 
function distance(string $strandA, string $strandB) : int
{
    if(strlen($strandA) !== strlen(($strandB))){
        throw new Exception("DNA 長度不一樣");
        //throw new InvalidArgumentException("DNA 長度不一樣");
    }
    $count = 0;
    $len = strlen($strandA);

    for($i =0 ; $i < $len ; $i++){
        if($strandA[$i] !== $strandB[$i]){ $count++; }
    }

    return $count;
}
*/

/*
function distance(string $strandA, string $strandB) : int
{
    $h1 = gmp_init($strandA); // 不知道第二個參數擺啥 看來有預設先用預設
    $h2 = gmp_init($strandB);

    $count = gmp_hamdist($h1, $h2);
    return $count;
}
*/






