<?php

class database
{
    private $dbconn;
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;

    private function setDBhost($host)
    {
        $this->$dbconn = $arg1;
    }

    private function setDBcredential($user, $pass)
    {
        $this->$dbuser = $user;
        $this->$dbpass = $pass;
    }

    private function setDBname($name)
    {
        $this->$dbname = $name;
    }

    public function connectDB()
    {
        $this->$dbconn = mysql_connect($this->$dbhost, $dbuser,$dbpass);
    }

    public function selectDB($arg1)
    {

    }


}

$db = new database();
$db->selectDB();
?>