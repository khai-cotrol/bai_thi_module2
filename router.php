<?php
include "vendor/autoload.php";

use \App\Controller\Controller;
$controller = new Controller();
$page = isset($_REQUEST['page'])? $_REQUEST['page']:null;
$name= isset($_REQUEST['search'])? $_REQUEST['search']:null;
switch ($page){
    case 'list':
    $controller->getAll();
    break;
    case 'add':
        $controller->Add();
        break;
    case 'delete':
        $controller->Deltete();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'search':
        $controller->Search($name);
        break;
}