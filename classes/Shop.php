<?php
include_once "Db.php";

class Shop
{
    public function feed()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare("select * from Shop ORDER BY price ASC");
        $statement->execute();

        return $this->result = $statement->fetchAll();
    }
}
