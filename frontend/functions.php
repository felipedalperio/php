<?php

    function load_page(){
        $path = "./frontend/pages/";
        isset($_GET['p']) ? $page = $_GET['p'] : $page = 'carro';
        isset($_GET['sub']) ? $sub = $_GET['sub'] : $sub = 'tabela';

        switch($page){
          case "carro":
          case "cliente":
          case "funcionario":
            require_once($path.$page.".php");
            include('./frontend/submenu/submenu.php');
          break;
          case "fatorial":
            include('./frontend/pages/fatorial.php');
            break;
          default:
            require_once($path."error404.php");
          break;
        }

        if(isset($sub) and file_exists($path.$page.".php") and file_exists('./frontend/'.$page) ){
          switch($sub){
            case "tabela":
              require_once("./frontend/".$page."/".$sub.".php");
              break;
            case "form":
              require_once("./frontend/".$page."/".$sub.".php");
              break;
          }
        }
    }
    
?>