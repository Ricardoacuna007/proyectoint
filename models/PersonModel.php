<?php

require_once __DIR__ . '/../db/Conexiondb.php';

class PersonModel extends Conexiondb
{
    protected $connection;
    protected $table ="tbl_persons";

    public function save(UserEntity $userEntity) /*Sin ORM */
    {
        $this->connection = parent::conectardb();
        parent::setNames();
		        
        $sql = "INSERT INTO {$this->table} (pk_phone, person, first_name, last_name, gender, birthday) VALUES (?,?,?,?,?,?);";
        
        $data = $this->connection->prepare($sql);

        $data->bindValue(1, $userEntity->getPkPhone(),   PDO::PARAM_STR);
        $data->bindValue(2, $userEntity->getPerson(),    PDO::PARAM_STR);
        $data->bindValue(3, $userEntity->getFirstName(), PDO::PARAM_STR);
        $data->bindValue(4, $userEntity->getLastName(),  PDO::PARAM_STR);
        $data->bindValue(5, $userEntity->getGender(),    PDO::PARAM_STR);
        $data->bindValue(6, $userEntity->getBirthday(),  PDO::PARAM_STR);

        $status = $data->execute();
        $this->connection = parent::desconectardb();
		
		return $status;
	}   
}

?>