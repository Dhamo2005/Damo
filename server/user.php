<?php
class DBConnection
{
    function DBConnection()
    {
        $host = 'localhost';
        $dbname = 'damo';
        $user = 'root';
        $pass = '';
        try {
            $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $DBH;
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}

class user
{
    private function register_user()
    {
        $statement = $DBH->prepare('INSERT INTO testtable (name, lastname, age) VALUES (:fname, :sname, :age)');
        $statement->execute(['fname' => 'Bob', 'sname' => 'Desaunois', 'age' => '18',]);
    }
}