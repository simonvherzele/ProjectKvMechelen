<?php
include_once("Db.php");

class User
{
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $avatar;


    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        if (!empty($firstname)) {
            $this->firstname = $firstname;
        } else {
            throw new \Exception("You can't leave this empty.");
        }
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        if (!empty($lastname)) {
            $this->lastname = $lastname;
        } else {
            throw new \Exception("You can't leave this empty.");
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (!empty($email)) {
            $this->email = $email;
        } else {
            throw new \Exception("You can't leave this empty.");
        }
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        if (!empty($password) && strlen($password) >= 6) {
            $this->password = $password;
        } else {
            throw new \Exception("Password cannot be empty and needs at least 6 characters");
        }
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }


    public function register()
    {
        // connection with database
        $conn = Db::getInstance();

        // compare email from input to user emails in database
        $statementCheck = $conn->prepare("SELECT * FROM users WHERE email = :email;");
        $statementCheck->bindValue(":email", $this->getEmail());
        $statementCheck->execute();
        $row = $statementCheck->fetch(\PDO::FETCH_ASSOC);

        if (!$row) { // if query returns no rows add new user

                $options = [
                    'cost' => 12,
                ];
            $password = $this->getPassword();
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

            $statement = $conn->prepare("INSERT INTO Users (email, firstname, lastname, password, avatar) VALUES (:email, :firstname, :lastname, :password, :avatar);");
            $statement->bindValue(":email", $this->getEmail());
            $statement->bindValue(":firstname", $this->getFirstname());
            $statement->bindValue(":lastname", $this->getLastname());
            $statement->bindValue(":password", $hashedPassword);
            $statement->bindValue(":avatar", $this->getAvatar());

            $statement->execute();
        } else { //else return error
                throw new \Exception("This email is already in use");
        }
    }

    public function resizeUserImage($imageFile, $imageType, $imageName)
    {
        list($width, $height) = getimagesize($imageFile);
        $w = 800;
        $h = 800;
        $r = $width/$height;

        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }

        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }

        if ($imageType == IMAGETYPE_JPEG) {
            $src = imagecreatefromjpeg($imageFile);
            $dst = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($dst, "./IMDterest/uploads/" . $imageName);
        } elseif ($imageType == IMAGETYPE_PNG) {
            $src = imagecreatefrompng($imageFile);
            $dst = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagepng($dst, "./IMDterest/uploads/" . $imageName);
        } else {
            $src = imagecreatefromgif($imageFile);
            $dst = imagecreatetruecolor($newwidth, $newheight);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagegif($dst, "./IMDterest/uploads/" . $imageName);
        }
    }

    public function update($userid)
    {
        $conn = Db::getInstance();

        $options = [
                'cost' => 12,
            ];
        $password = $this->getPassword();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT, $options);

        $statement = $conn->prepare("UPDATE Users SET email = :email, firstname = :firstname, lastname = :lastname, password = :password, avatar = :avatar WHERE id = :userid;");
        $statement->bindValue(":email", $this->getEmail());
        $statement->bindValue(":firstname", $this->getFirstname());
        $statement->bindValue(":lastname", $this->getLastname());
        $statement->bindValue(":password", $hashedPassword);
        $statement->bindValue(":avatar", $this->getAvatar());
        $statement->bindValue(":userid", $userid);

        $statement->execute();
    }

    public function canLogin()
    {

            // connection with database
            $conn = Db::getInstance();

            //get user & password from database
            $statement = $conn->prepare("SELECT * FROM Users WHERE email = :email");
        $statement->bindValue(':email', $this->getEmail());
        $statement->execute();

        if ($statement->rowCount()== 1) {
            $row = $statement->fetch();

            if (password_verify($this->getPassword(), $row['password'])) {
                return true;
            } else {
                // no match with password
                    return false;
            }
        } else {
            // email not found
                return false;
        }
    }

    public function login()
    {
        $conn = Db::getInstance();

        $statement = $conn->prepare('SELECT id FROM Users where email = :email');
        $statement->bindValue(':email', $this->getEmail(), $conn::PARAM_STR);
        $statement->execute();

        $res = $statement->fetch();
        $userid = $res['id'];

        session_start();

        $_SESSION['userID'] = $userid;
    }
}
