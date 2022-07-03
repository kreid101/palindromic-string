<?php 
$s="xaabacxcabaaxcabaax";

function LongestPal($s)
{
    $allMatches=[];
    $lon=0;
    $word='';
   for($i1=0;$i1<strlen($s);$i1++)
   {
    for($i2=$i1;$i2<strlen($s);$i2++)
    {
        if($s[$i1] == $s[$i2])
        {
            $allMatches[]=substr($s,$i1,($i2-$i1)+1);
        }
    }
   }
 
  
   for($i3=0;$i3<count($allMatches);$i3++)
   {
    if($allMatches[$i3] == (strrev($allMatches[$i3])))
    {
        if(strlen($allMatches[$i3])>$lon)
        {
            $lon=strlen($allMatches[$i3]);
            $word=$allMatches[$i3];
        }
        
    }
   }
 
   print($word);
}

print(LongestPal($s));
?>