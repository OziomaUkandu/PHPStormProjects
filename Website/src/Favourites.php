<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 03-Apr-19
 * Time: 11:48 AM
 */

namespace Tudublin;


class Favourites
{
    private $id;
    private $userId;
    private $cityId;
    private $seasonId;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Id = $this->id, User = $this->userId, City = $this->cityId, Season = $this->seasonId";
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return mixed
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }

    /**
     * @param mixed $seasonId
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;
    }



}