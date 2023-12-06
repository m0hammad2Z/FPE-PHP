<?php 

class Connect {
    public static function connectTo($serverName, $username, $password, $database)
    {
        try {
            $conn = new PDO("pgsql:host=$serverName;dbname=$database", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}

class User {
    public $id;
    public $name;
    public $email;
    public $pass;

    private $conn;

    private $serverName = 'localhost';
    private $username = 'postgres';
    private $password = '12345678';
    private $database = 'test';

    function __construct($id, $name, $email, $pass)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;

        try {
            $this->conn = Connect::connectTo($this->serverName, $this->username, $this->password, $this->database);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function add(){
        $stmt = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :pass)");
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);

        $stmt->execute();
        $stmt->closeCursor();
        
    }

    function update(){
        $stmt = $this->conn->prepare("UPDATE users SET name = :name, email = :email, password = :pass WHERE id = :id");
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':pass', $this->pass);

        $stmt->execute();
        $stmt->closeCursor();
    }

    public static function delete($id){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        
        $stmt->execute();
        $stmt->closeCursor();
    }

    public static function getAll(){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_BOTH);
        return $result;
    }

    public static function get($id){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();


        $row = $stmt->fetch(PDO::FETCH_BOTH);
        $user = new User($row['id'], $row['name'], $row['email'], $row['password']);
        return $user;
    }

    public static function getByEmail($email){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email limit 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();


        $result = $stmt->fetch(PDO::FETCH_BOTH);
        $user = new User($result['id'], $result['name'], $result['email'], $result['password']);
        return $user;
    }

}



?>
