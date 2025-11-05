<?php
include_once dirname(__FILE__) . '/keys.php';

abstract class Conexiondb
{
	private $pdo;

    public function conectardb()
    {
        try
        {
			return $this->pdo =  new PDO('mysql:dbname='.DB_NAME.'; host='.DB_HOST, DB_USER, DB_PASS);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            exit;
        }
    }

    public  function desconectardb()
    {
       return $this->pdo = null;
    }

    public function setNames()
    {
        return $this->pdo->query("SET NAMES 'utf8'");
    }
}
?>

