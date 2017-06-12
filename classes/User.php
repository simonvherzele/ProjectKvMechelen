<?php 
include_once 'Db.php';

class User{

private $email;
private $password;
private $firstname;
private $lastname;

public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

public function getEmail()
{
	return $this->email;
}

public function setEmail($email)
{
    $this->email = $email;
}

public function getPassword()
{
    return $this->password;
}

public function setPassword($password)
{
    $this->password = $password; 
}

public function register(){
        $conn = Db::getInstance();

        $options = [
                    'cost' => 12,
                ];
            $password = $this->getPassword();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

            $statement = $conn->prepare("INSERT INTO users (email, firstname, lastname, password) VALUES (:email, :firstname, :lastname, :password);");
            $statement->bindValue(":email", $this->getEmail());
            $statement->bindValue(":firstname", $this->getFirstname());
            $statement->bindValue(":lastname", $this->getLastname());
            $statement->bindValue(":password", $hashedPassword);

            $statement->execute();
            header('Location: index.php');
}

public function login()
    {
        /*$conn = Db::getInstance();

        $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(':email', $this->getEmail());
        $statement->execute();
        $row = $statement->fetch();

        if (password_verify($this->getPassword(), $row['password'])) {
                header('Location: index.php');
            } else {
                // no match with password
                    return false;
            }*/
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(':email', $this->getEmail());
        $statement->execute();
        $row = $statement->fetch();
        if ($statement->rowCount()== 1){
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['kakskes'] = $row['kakskes'];
            header('Location: index.php');    
        } else{
            echo "geen gekend account";
        }
        

        
    }




}