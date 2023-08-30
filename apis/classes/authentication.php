<?php
class Auth
{
    private $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    public function createUser($name, $email, $pass)
    {
        if ($this->isUserExists($email)) {
            return -1;  //user already exixts
        } else {
            $password = md5($pass);
            $stmt = $this->con->prepare("INSERT INTO `users` (`name`,`email`, `password`) VALUES (?,?,?);");
            $stmt->bind_param("sssi", $name, $email, $password, $role);
            if ($stmt->execute()) {
                return 1;  //user created successfully
            } else {
                return 0; //something went wrong
            }
        }
    }
    public function isUserExists($email)
    {
        $stmt = $this->con->prepare("SELECT * FROM `users` WHERE `email`=? ");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        return $stmt->num_rows > 0;
    }
    public function login($email, $password)
    {
        $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($this->con, $sql);
        if ($result != false) {
            if (mysqli_fetch_assoc($result))
                return true;
            else
                return false;
            return true;
        } else
            return false;
    }
    // public function login($email, $pass)
    // {
    //     $password = md5($pass);
    //     $stmt = $this->con->prepare("SELECT * FROM `users` WHERE `email`=? AND `password`=?");
    //     $stmt->bind_param("ss", $email, $password);
    //     $stmt->execute();
    //     $stmt->store_result();
    //     return $stmt->num_rows > 0; // true or false
    // }


    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        return mysqli_query($this->con, $sql);
    }
}
