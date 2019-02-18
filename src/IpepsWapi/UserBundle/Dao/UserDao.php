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
    public function __construct()
    {

    }

    /**
     * @return array
     */
    public function findAll()
    {
        $myPdo = $this->get('my_pdo');
        $sql = "SELECT id, nom, prenom, email, telephone FROM users";

        $statement = $myPdo->query($sql);


        while (false !== ($row = $statement->fetch(\PDO::FETCH_ASSOC))) {
            $results[] = $row;
        }
        return $results;
    }

}