<?php
include("functions.php");

$simpleArr = [1,2,3,4,5];
$simpleArr2 = [1,2];
$associativeArr = ["name" => "Ali","lastName" => "Bahoosh","Birthday" => "1990"];
$arrayInArr = [[1,'Reza','Taghi'],[0,10,3]];

LoopForAssociativeArr($associativeArr);
FindElement($associativeArr,"Ali");
$Keys1 = ExtractKeys($associativeArr);
LoopForNormalArr($Keys1);
$Values1 = ExtractValues($associativeArr);
LoopForNormalArr($Values1);
$newArr1 = MergeArrays($simpleArr,$associativeArr);
LoopForNormalArr($newArr1);
$newArr2 = DifferenceArrays($simpleArr,$associativeArr);
LoopForNormalArr($newArr2);
$newArr3 = IntersectArrays($simpleArr,$simpleArr2);
LoopForNormalArr($newArr3);
?>