<?php
//目的是做一个打字机的效果,思路是选取字符串中的每个字符,相隔固定时间输出
$string = 'hello  world';

//$part = explode(' ', $string);
//用strlen来确定字符串长度,以跳出循环;substr(字符串,选出的字符串位置,限制输出的字符长度)
for($i=0;$i <strlen($string);$i++){
   echo substr($string,$i,1);
   
//sleep(second);usleep(microsecond)
   sleep(1); 
}


 
?>