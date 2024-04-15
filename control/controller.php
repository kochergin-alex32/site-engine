<?php
require_once "handlers/controller_switch_pages.php";

function run_app(){
    if(empty($_GET['page'])){
        require_once ('pages/main-page.php');
    } else {
        switch_page();
    }
}
