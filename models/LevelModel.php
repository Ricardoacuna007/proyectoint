<?php

require_once __DIR__ . '/../db/Conexiondb.php';

class LevelModel extends Conexiondb
{
    protected $connection;
    protected $table ="cat_levels";

    public function save(LevelEntity $levelEntity) /*Sin ORM */
    {
        $this->connection = parent::conectardb();
        parent::setNames();
		        
        $sql = "INSERT INTO {$this->table} (pk_level, level) VALUES (?,?);";
        
        $data = $this->connection->prepare($sql);

        $data->bindValue(1, $levelEntity->getPkLevel(), PDO::PARAM_STR);
        $data->bindValue(2, $levelEntity->getLevel(),   PDO::PARAM_STR);
        
        $status = $data->execute();
        $this->connection = parent::desconectardb();
		
		return $status;
	}   
}

?>