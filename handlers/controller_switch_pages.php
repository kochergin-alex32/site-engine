<?php 
function  switch_page(){
    $page = $_GET['page'];

    if(isset($page)){
         $path = "pages/{$page}.php";
        if(file_exists($path)){
             include $path;
        }else {
             echo "404 not faund";
        }
    } 
}
  