<?php $GLOBALS['con'] = new mysqli("localhost", "id17575020_dhamo", "=)1d@VzBIA#pt~SH", "id17575020_damosms");
class db
{
    protected function db()
    {
        $dbhost = 'localhost';
        $dbname = 'id17575020_damosms';
        $dbusername = 'id17575020_dhamo';
        $dbpassword = '=)1d@VzBIA#pt~SH';
        $con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    }
}
