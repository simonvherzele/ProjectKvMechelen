<?php
include_once('Db.php');

class Shop
{
    private $name;
    private $price;
    private $result;
    private $keyword;

    public function getKeyword()
    {
        return $this->keyword;
    }

    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

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

        $statement = $conn->prepare("INSERT INTO Shop (name, price) VALUES (:name, :price)");
        $statement->bindValue(':name', $this->getName());
        $statement->bindValue(':price', $this->getPrice());

        $statement->execute();
    }

    public function delete()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare("DELETE FROM Shop WHERE name = :name");
        $statement->bindValue(':name', $this->getName());

        $statement->execute();
    }

    public function feed()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare("select * from Shop ORDER BY price ASC");
        $statement->execute();

        return $this->result = $statement->fetchAll();
    }

    public function search()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM Shop WHERE name LIKE :keywords");
        $statement->bindValue(':keywords', $this->getKeyword());
        $statement->execute();

        if ($statement->rowCount() >= 1) {
            return $this->result = $statement->fetchAll();
        } else {
            throw new Exception("No matching results.");
        }
    }
}
