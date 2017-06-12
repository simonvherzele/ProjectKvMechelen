<?php
include_once 'Db.php';

class Aanbieding
{
	public function feed()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare("select * from Aanbiedingen ORDER BY price ASC");
        $statement->execute();

        return $this->result = $statement->fetchAll();
    }
}