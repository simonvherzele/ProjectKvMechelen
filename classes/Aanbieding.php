<?php
include_once('Db.php');

class Aanbieding
{
    private $name;
    private $price;
    private $result;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result)
    {
        $this->result = $result;
    }

    public function upload()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare("INSERT INTO Aanbieding (name, price) VALUES (:name, :price)");
        $statement->bindValue(':name', $this->getName());
        $statement->bindValue(':price', $this->getPrice());

        $statement->execute();
    }

    public function feed()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare("select * from Aanbieding ORDER BY price ASC");
        $statement->execute();

        return $this->result = $statement->fetchAll();
    }
}
