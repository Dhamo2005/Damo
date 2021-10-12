<?php $GLOBALS['con'] = new mysqli("localhost", "root", "", "damo");
mysqli_set_charset( $con, 'utf8');
class DB
{
    static function Con()
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