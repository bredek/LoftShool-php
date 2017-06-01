<?php

   // вариант поиска ссылок в тексте

   $str="
   <a href=url1>name1</a> 
   <a href=url2>name2</a>
   <a href='url3'>name3</a> 
   <a href=url4>< скобки ></a>
   <a href=\"url5\"><b>жирно</b></a> 
   <a href=url6>\"кавычки\"</a>
   <a target=\"<попытка обхитрить программу> хахаха\" href=url7>77777</a>
   <a href=url8 target=\"<попытка обхитрить программу> хахаха\" >88888</a>";

   echo "<pre>Исходный код:".htmlspecialchars($str)."</pre>";

   echo "---------------Вариант 1---------------";

   preg_match_all("!<a.*?href=\"?'?([^ \"'>]+)\"?'?.*?>(.*?)</a>!is",$str,$ok);

   for ($i=0; $i<count($ok[1]); $i++) {
      echo "<li>".$ok[1][$i]." - ".$ok[2][$i];
   }

   echo "<br>---------------Вариант 2---------------";

   preg_match_all("!<a[^>]+href=\"?'?([^ \"'>]+)\"?'?[^>]*>(.*?)</a>!is",$str,$ok);
   for ($i=0; $i<count($ok[1]); $i++) {
      echo "<li>".$ok[1][$i]." - ".$ok[2][$i];
   }

   echo "<br>---------------Вариант 3---------------";

   preg_match_all("!<a[^>]+href=\"?'?([^ \"'>]+)\"?'?[^>]*>([^<>]*?)</a>!is",$str,$ok);
   for ($i=0; $i<count($ok[1]); $i++) {
      echo "<li>".$ok[1][$i]." - ".$ok[2][$i];
   }

