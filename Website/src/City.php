<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 01-Apr-19
 * Time: 3:24 PM
 */

namespace Tudublin;


class City
{
   private $id;
   private $name;

   public function __toString()
   {
       // TODO: Implement __toString() method.
       return 'id = ' . $this ->id
           . '<br> name = ' . $this->name;
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
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */

}