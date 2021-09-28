<?php $GLOBALS['con'] = new mysqli("localhost", "root", "", "damo");
class db
{
    protected function db()
    {
        $dbhost = 'localhost';
        $dbname = 'damo';
        $dbusername = 'root';
        $dbpassword = '';
        $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    }
}
