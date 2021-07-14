<?php


namespace App\Controller;


use App\Model\Product;
use App\Model\ProductModel;

class Controller
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }
    public function getAll()
    {
        $result = $this->productModel->getAll();
        include "view/list.php";
    }
    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include "view/add.php";
        }else{
            $name = $_POST['name'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $amount =$_POST['amount'];
            $comment=$_POST['comment'];
            $product = new Product($name,$brand,$price,$amount,$comment);
            $this->productModel->Add($product);
            header('Location: index.php');
        }
    }
    public function Deltete()
    {
        $id =$_REQUEST['id'];
        $this->productModel->Delete($id);
        header('Location: index.php?page=list');
    }
    public function edit()
    {
        $id = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include 'view/edit.php';
        }else{
            $name = $_POST['name'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $amount =$_POST['amount'];
            $comment=$_POST['comment'];
            $product = new Product($name,$brand,$price,$amount,$comment);
            $this->productModel->edit($id,$product);
            header('Location: index.php?page=list');
        }

    }
    public function Search($name)
    {
        if (empty($name)){
            $result = $this->productModel->getAll();
            include "view/search.php";
        }else{
            $result = $this->productModel->Search($name);
            include "view/search.php";
        }
    }

}