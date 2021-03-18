<?php
    $str = 'Write a function countWords($str) that takes any string of characters and finds the number of times each string occurs.';
    function countWords($str) {
        $new=explode(" ",$str);
        $arrayCount=array();
        for($i=0;$i<count($new);$i++) {
            $count=0;
            foreach($new as $value) {
                if($new[$i] == $value) {
                    $count++;
                }
            }
            $arrayCount[$new[$i]]=$count;
        }
        return $arrayCount;
    }
    foreach(countWords($str) as $key => $value) {
        echo "[$key] => $value <br>";
    }
?>