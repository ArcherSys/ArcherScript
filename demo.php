<?php

  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/HeadersManager.php";use ArcherSys\Viewer\Contrib\View;use ArcherSys\Headings\HeaderManager;
  $view = new View("'Hello World'",function(){

  },function(){
    HeaderManager::addH1("Hello World");});
?> 