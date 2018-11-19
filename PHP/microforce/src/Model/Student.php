<?php
namespace MicroForce\Model;

use MicroForce\Connection\ConnectionSingleton;

class Student
{
    private $id;
    
    private $firstname;
    
    private $lastname;
    // ?Student means maybe
    public function create(string $firstname, string $lastname) : ?Student 
    {
        $connection = ConnectionSingleton::getConnection();
        try {
            $stmt = $connection->prepare('INSERT INTO students(fisrtname, lastname) VALUE (:firstname, :lastname);');
            $stmt->bindValue('firstname', $firstname);
            $stmt->bindValue('lastname', $lastname);
            $stmt->execute();
            
            $this->id = $connection->lastInsertId();
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            
        } catch(\Exception $e) {
            return null;
        }
        return $this;
    }
    
    public function update() : Student
    {
        $connection = ConnectionSingleton::getConnection();
        $stmt = $connection->prepare(
            'UPDATE students SET firstname = :firstname, lastname = :lastname WHERE id = :id'
        );
        $stmt->bindValue('firstname', $this->firstname);
        $stmt->bindValue('lastname', $this->lastname);
        $stmt->bindValue('id', $this->id);
        $stmt->execute();
        
        return $this;
    }
    
    public function delete() : bool
    {
        $connection = ConnectionSingleton::getConnection();
        $stmt = $connection->prepare('DELETE FROM students WHERE id = :id');
        $stmt->execute(['id' => $this->id]);
        return true;
    }
    
    static public function findAll() : array
    {
        $connection = ConnectionSingleton::getConnection();
        /**
         * @var \PDOStatement $stmt
         */
        $stmt = $connection->query('SELECT * FROM students');
        return $stmt->fetchAll(\PDO::FETCH_CLASS, __CLASS__);
    }
}

