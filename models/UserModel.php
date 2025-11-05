<?php

require_once __DIR__ . '/../db/Conexiondb.php';

class UserModel extends Conexiondb
{
    protected $connection;
    protected $table ="tbl_users";

    public function save(UserEntity $userEntity) /*Sin ORM */
    {
        $this->connection = parent::conectardb();
        parent::setNames();
		        
        $sql = "INSERT INTO {$this->table} (pk_user, fk_phone, fk_level, password, locked) VALUES (?,?,?,?,?);";
        
        $data = $this->connection->prepare($sql);

        $data->bindValue(1, $userEntity->getPkUser(),   PDO::PARAM_STR);
        $data->bindValue(2, $userEntity->getFkPhone(),  PDO::PARAM_STR);
        $data->bindValue(3, $userEntity->getFkLevel(),  PDO::PARAM_STR);
        $data->bindValue(4, $userEntity->getPassword(), PDO::PARAM_STR);
        $data->bindValue(5, $userEntity->getLocked(),   PDO::PARAM_STR);

        $status = $data->execute();
        $this->connection = parent::desconectardb();
		
		return $status;
	}   

    public function login(UserEntity $userEntity)
    {
        $this->connection = parent::conectardb();
        parent::setNames();
    
        $sql = "SELECT fk_level FROM {$this->table} WHERE fk_phone = ? AND password = ?;";
    
        $data = $this->connection->prepare($sql);
    
        $data->bindValue(1, $userEntity->getFkPhone());
        $data->bindValue(2, $userEntity->getPassword());
    
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC); 
        
        $this->connection = parent::desconectardb();

        if($result) 
        {
            return 1; 
        } 
        else 
        {
            return -1; 
        }
	} 
    
    public function level(UserEntity $userEntity)
    {
        $this->connection = parent::conectardb();
        parent::setNames();
    
        $sql = "SELECT fk_level FROM {$this->table} WHERE fk_phone = ? AND password = ?;";
    
        $data = $this->connection->prepare($sql);
    
        $data->bindValue(1, $userEntity->getFkPhone());
        $data->bindValue(2, $userEntity->getPassword());
    
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        $this->connection = parent::desconectardb();

        return $result[0]['fk_level'];
	}  
    
    public function check(UserEntity $userEntity)
    {
        $this->connection = parent::conectardb();
        parent::setNames();
    
        $sql = "SELECT pk_user, person, first_name, last_name FROM {$this->table} INNER JOIN tbl_persons ON tbl_users.fk_phone = tbl_persons.pk_phone WHERE fk_phone = ?;";
    
        $data = $this->connection->prepare($sql);
    
        $data->bindValue(1, $userEntity->getFkPhone());
    
        $data->execute();
        
        $this->connection = parent::desconectardb();

        return $result = $data->fetchAll(PDO::FETCH_ASSOC);     
    }
}

?>