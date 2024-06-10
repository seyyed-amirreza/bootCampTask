<?php
$testFile = fopen("test.txt","r");
$newfile = fopen("test2.txt","a");
// echo fread($testFile , filesize("test.txt"));
// while(!feof($testFile)){
//     // echo fgets($testFile) . "<br>";
//     // echo fgetc($testFile),"<br>";
// }
fwrite($newfile,"Hello World6! \n");
fclose($newfile);
$newfile2 = fopen("test2.txt","r");
// echo fread($newfile2,filesize("test.txt"));
while(!feof($rea))
fclose($newfile2);
?>