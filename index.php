<!-- точка входа -->
<?php 
   $page = $_GET['page'];
//    проверяем наличие страницы если есть то идем дальше
   if(isset($page)){
        $path = "pages/{$page}.php";
    //    провяем путь для отрисовки страниц
       if(file_exists($path)){
            include $path;
       }else {
            echo "404 not faund";
       }
   } 
  
?>
<!-- 43 офлайн с1,30 до 2,30 создание движка сайта на php -->