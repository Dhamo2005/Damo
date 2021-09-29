<?php
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

class user
{
    static function register_user()
    {
        $statement = DB::con()->prepare("INSERT INTO `recentlysearched` (`uid`, `keyword`) VALUES (:uid, :keyword)");
        $statement->execute(['uid' => '278', 'keyword' => 'Desaunois']);
    }
}
// function register_user() {
//     $username = htmlspecialchars(mysqli_real_escape_string($_POST['username']));
    
// }
user::register_user();