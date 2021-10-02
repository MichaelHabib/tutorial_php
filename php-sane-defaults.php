<?php


function mh_array_filter(array $array, $callback){
  
  return array_filter(
    $array,
    $callback,
		ARRAY_FILTER_USE_BOTH
  );
  
}
