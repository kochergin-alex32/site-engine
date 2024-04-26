        <!-- записываем кусок верстки с ссылками для хедера и и инклудим этот хедр в другие файлы в начало тк это частьвезде повторяется -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- меняем название страницы в хеде в зависимости от страницы на которй мы есть -->
    <title>
        <?php
        // if(isset($_GET['page'])){
            //     echo  $_GET['page'];
            // }
            echo (isset($_GET['page'])) ? $_GET['page'] : "";
            
            ?>
    </title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- создем структуру -->
    <header class="header container">
        <div class="content">
            <div class="header-logo footer-logo ">
                <a href="?page=main-page" >
                    <img class="logo" src="/assets/img/it-avatar.png" alt="">
                </a>
            </div>
            <div class="header-search">
                <a href="">категории</a>
                <input type="text" >
            </div>
            <div class=" header-login footer-buttons">
            
                <a href="?page=user-card">понеслась</a>
                
              
            </div>
        </div>
        <!-- прописываем в сыылку путь -->
        <!-- <a href="?page=main-page"> logo</a> -->
        <!-- <a href="?page=user-card">carduser</a> -->

        <!-- <a href="?page=index"> index</a>
        <a href="?page=contacts">contacts</a>
        <a href="?page=about">about</a> -->
    </header>
        