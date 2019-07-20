<?php

function getFiles($path){
  $dir = scandir($path);
  $files = [];


  function valid($file){
    $extension = explode('.', $file);
    $extension = $extension[1];
    if($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png'){
      return $file;
    }
    return false;
  }

  for($i=2; $i<count($dir); $i++){
    if(valid($dir[$i])){
      array_push($files, ["name" => $dir[$i], "path" => '/site./assets/img/slider/'.$dir[$i]]);
    }
  }

  return $files;
}

print_r(json_encode(getFiles('./assets/./assets/img/slider')));