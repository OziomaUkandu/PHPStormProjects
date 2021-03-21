<?php

namespace Tudublin;


class Item
{
    private $id ;
    private $topSize ;
    private $bottomSize ;
    private $shoeSize ;
    private $accessorySize ;

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
    public function getTopSize()
    {
        return $this->topSize;
    }

    /**
     * @param mixed $topSize
     */
    public function setTopSize($topSize)
    {
        $this->topSize = $topSize;
    }

    /**
     * @return mixed
     */
    public function getBottomSize()
    {
        return $this->bottomSize;
    }

    /**
     * @param mixed $bottomSize
     */
    public function setBottomSize($bottomSize)
    {
        $this->bottomSize = $bottomSize;
    }

    /**
     * @return mixed
     */
    public function getShoeSize()
    {
        return $this->shoeSize;
    }

    /**
     * @param mixed $shoeSize
     */
    public function setShoeSize($shoeSize)
    {
        $this->shoeSize = $shoeSize;
    }

    /**
     * @return mixed
     */
    public function getAccessorySize()
    {
        return $this->accessorySize;
    }

    /**
     * @param mixed $accessorySize
     */
    public function setAccessorySize($accessorySize)
    {
        $this->accessorySize = $accessorySize;
    }


}
