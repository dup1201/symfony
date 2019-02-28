<?php
/**
 * Created by PhpStorm.
 * User: Yoram
 * Date: 08/02/2019
 * Time: 14:54
 */

namespace IpepsWapi\UserBundle\Dao;


class UserDao
{
    protected $pdo;
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return array
     */
    public function findAll()
    {
        $pdo=$this->pdo;
        $sql = "SELECT id, nom, prenom, email, telephone FROM users";

        $statement = $pdo->query($sql);

        $results = array();

        while (false !== ($row = $statement->fetch(\PDO::FETCH_ASSOC))) {
            $results[] = $row;
        }
        return $results;
    }

    public function findById($id)
    {
        $sql = "SELECT id, nom, prenom, email, telephone FROM users WHERE id=:id";

        $preparedStatement = $this->pdo->prepare($sql);
        $preparedStatement->bindValue(':id', $id);
        $preparedStatement->execute();

        $row = $preparedStatement->fetch(\PDO::FETCH_ASSOC);
        if($row === false)
            return null;
        $results = $row;
        return $results;

    }

}