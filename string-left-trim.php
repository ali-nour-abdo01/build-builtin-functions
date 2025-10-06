<?php



function string_left_trim(string $str,mixed $val=" "):string{

$result="";
$stop=false;
for($i=0;$i<strlen($str);$i++):
if($str[$i]==$val&&$stop==false){
        continue;
}else{
$stop=true;

}

$result.=$str[$i];

endfor;
return $result;




}


echo string_left_trim("       ali abdo")."<br>";
echo string_left_trim("%%%%%%%%ali abdo","%")."<br>";



















?>
