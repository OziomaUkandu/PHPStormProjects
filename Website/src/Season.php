<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03-Apr-19
 * Time: 10:43 AM
 */

namespace Tudublin;


class Season
{

    private $id;
    private $name;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return 'id = ' . $this ->id . ',  name = ' . $this->name . '<br>';
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

}