<?php


namespace App\Model;

use \PDO;
class ProductModel
{
    private $DBconnect;
    public function __construct()
    {
        $this->DBconnect = new DBconnect();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM `products` ORDER BY `name` ASC ";
        $stmt = $this->DBconnect->connection()->query($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $result = $stmt->fetchAll();
        return $result;
    }
    public function Add(object $product)
    {
        $sql = "INSERT INTO `products`(`name`,`brand`,`price`,`amount`,`comment`)VALUES (?,?,?,?,?)";
        $stml = $this->DBconnect->connection()->prepare($sql);
        $stml->bindParam(1,$product->getName());
        $stml->bindParam(2,$product->getBrand());
        $stml->bindParam(3,$product->getPrice());
        $stml->bindParam(4,$product->getAmount());
        $stml->bindParam(5,$product->getComment());
        $stml->execute();
    }
    public function Delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id`=".$id;
        $stmt=$this->DBconnect->connection()->query($sql);
        $stmt->execute();
    }
    public function edit($id,$product)
    {
        $sql = "UPDATE `products` SET `name`=?,`brand`=?,`price`=?,`amount`=?,`comment`=? WHERE `id`=? ";
        $stml= $this->DBconnect->connection()->prepare($sql);
        $stml->bindParam(1,$product->getName());
        $stml->bindParam(2,$product->getBrand());
        $stml->bindParam(3,$product->getPrice());
        $stml->bindParam(4,$product->getAmount());
        $stml->bindParam(5,$product->getComment());
        $stml->bindParam(6,$id);
        return $stml->execute();
    }
    public function Search($name): array
    {
        $products = [];
        $sql = "SELECT * FROM `products` WHERE `name` LIKE :text";
        $stml = $this->DBconnect->connection()->prepare($sql);
        $txt = '%' . $name . '%';
        $stml->bindParam(":text", $txt);
        $stml->execute();
        $result = $stml->fetchAll();
        foreach ($result as $row) {
            $product = new Product($row['name'],
                $row['brand'],
                $row['price'],
                $row['amount'],
                $row['comment']);
            $product->setName($row['name']);
            $product->setId($row['id']);
            $products[] = $product;
        }
        return $products;
    }


}