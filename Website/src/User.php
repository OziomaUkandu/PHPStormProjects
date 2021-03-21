<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03-Apr-19
 * Time: 11:16 AM
 */

namespace Tudublin;

class User
{
   private $id;
   private $name;
   private $password;
   private $CustId;
   private $AdminId;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'id = ' . $this ->id
            . '<br> name = ' . $this->name
            . '<br> custId = ' . $this->CustId
            . '<br> adminId = ' . $this->AdminId;

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $username
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCustId()
    {
        return $this->CustId;
    }

    /**
     * @param mixed $CustId
     */
    public function setCustId($CustId)
    {
        $this->CustId = $CustId;
    }

    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->AdminId;
    }

    /**
     * @param mixed $AdminId
     */
    public function setAdminId($AdminId)
    {
        $this->AdminId = $AdminId;
    }


}