<?php
    //Loop
    function LoopForNormalArr(&$simpleArr){
        foreach($simpleArr as $x){
            echo "$x <br>";
        };
    }
    function LoopForAssociativeArr(&$associativeArr){
        foreach($associativeArr as $x => $y){
            echo $x , " : " , $y , '<br>';
        };
    }
    function LoopForMultiDimensionalArr(&$multiArr){
        foreach($multiArr as $x){
            foreach($x as $y){
                echo $y , '<br>';
            };
        };
    }
    //Add
    function AddArr(&$arr, ...$x){
        array_push($arr, ...$x);
    }
    function AddArrAssociative(&$arr , $x , $y){
        $arr["$x"] = "$y";
    }
    //Remove
    function RemoveArr(&$arr , $index , $num){
        array_splice($arr,$index,$num);
    }
    function RemoveArrAssociative(&$arr,$index){
        unset($arr["$index"]);
    }
    function RemoveLast(&$arr){
        array_pop($arr);
    }
    function RemoveFirst(&$arr){
        array_shift($arr);
    }
    //Find element
    function FindElement(&$arr , $val){
        echo array_search($val,$arr);
    }
    //Extract keys
    function ExtractKeys(&$arr){
        $newArr = array_keys($arr);
        return $newArr;
    }
    //Extract elements
    function ExtractValues(&$arr){
        $newArr = array_values($arr);
        return $newArr;
    }
    //Merge
    function MergeArrays(&$arr1 , &$arr2){
        $newArr = array_merge($arr1,$arr2);
        return $newArr;
    }   
    //Difference
    function DifferenceArrays(&$arr1,&$arr2){
        $newArr = array_diff($arr1,$arr2);
        return $newArr;
    }
    //Intersect
    function IntersectArrays(&$arr1,&$arr2){
        $newArr = array_intersect($arr1,$arr2);
        return $newArr;
    }
?>
