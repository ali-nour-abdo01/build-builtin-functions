<?php

function string_length(string $str):int{

$count=0;

while(!empty($str[$count])){
$count++;
}
return $count;
}



echo string_length("ali abdo backend developer");













?>
