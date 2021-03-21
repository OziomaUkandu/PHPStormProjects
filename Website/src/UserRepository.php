<?php

namespace Tudublin;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;
use Mattsmithdev\PdoCrudRepo\DatabaseManager;

class UserRepository extends  DatabaseTableRepository
{
    public function __construct()
    {
        parent::__construct(__NAMESPACE__, 'User', 'user');
    }

    public function exitsUser($username, $password)
    {

        $db = new DatabaseManager();
        $connection = $db->getDbh();

        $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password' LIMIT 1";

        $stmt = $connection->query($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS,'\\Tudublin\\User');
        $user = $stmt->fetchAll();

//        $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
//
//        $statement = $connection->prepare($sql);
//        $statement->setFetchMode(PDO::FETCH_CLASS, $this->getClassNameForDbRecords());
//        $statement->bindParam(':username', $username, PDO::PARAM_STR);
//        $statement->bindParam(':password', $password, PDO::PARAM_STR);
//
//        $statement->execute();
//        $user = $statement->fetch();
//        $statement->closeCursor();
       unset($statement);

        if ($user) {
            return true;
        } else {
            return false;
        }

    }
}