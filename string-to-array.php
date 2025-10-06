<?php

function string_to_array(string $str):array{


$result=[];

for($i=0 ; $i<strlen($str);$i++):

$result[]=$str[$i];
endfor;
return $result;





}

echo"<pre>";

print_r(string_to_array("ali abdo"));

echo"</pre>";













?>
