<?php 
 
 define('FOO', 10);
 $array = array(20 => FOO, FOO => 20);
 echo $array[ $array[FOO] ] * $array[FOO];