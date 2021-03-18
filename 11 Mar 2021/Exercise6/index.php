<?php
    function group($array,$chunk_size){
        $tempArray=[];
        for ($index = 0; $index < count($array); $index += $chunk_size) {
            $myChunk = array_slice($array,$index,$chunk_size);
            array_push($tempArray,$myChunk);
        }
        return $tempArray;
    }
    foreach(group([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16],4)as$val){
        print_r($val);
        echo "<br>";
    };
?>