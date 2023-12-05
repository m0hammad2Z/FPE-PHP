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

class Employee
{
    public $id;
    public $name;
    public $address;
    public $salary;
    private $conn;

    private $serverName = 'localhost';
    private $username = 'postgres';
    private $password = '12345678';
    private $database = 'test';

    function __construct($id, $name, $address, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->salary = $salary;
        
        try {
            $this->conn = Connect::connectTo($this->serverName, $this->username, $this->password, $this->database);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function add()
    {
        $stmt = $this->conn->prepare("INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)");
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':salary', $this->salary);

        $stmt->execute();
        $stmt->closeCursor();
    }

    function update()
    {
        $stmt = $this->conn->prepare("UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id = :id");
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':salary', $this->salary);

        $stmt->execute();
        $stmt->closeCursor();
    }

    public static function delete($id){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("DELETE FROM employees WHERE id = :id");
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        $stmt->closeCursor();
    }


    public static function getAll(){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("SELECT * FROM employees");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_BOTH);
        return $result;
    }

    public static function get($id){
        $c = new connect();
        $conn = $c->connectTo('localhost', 'postgres', '12345678', 'test');

        $stmt = $conn->prepare("SELECT * FROM employees WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_BOTH);

        $emp = new Employee($result['id'], $result['name'], $result['address'], $result['salary']);
        return $emp;    
    }

}
?>
