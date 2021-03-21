<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26-Apr-19
 * Time: 12:40 PM
 */

namespace Tudublin;


class SessionManager
{
    private $username = '';
    private $loggedIn = false;

    public function __construct()
    {
        if(isset($_SESSION['username']))
        {
            $this->username = $_SESSION['username'];
            $this->loggedIn = true;
        }
    }

    public function isLoggedIn()
    {
        return $this->loggedIn;
    }
    public  function  userNameFromTheSession()
    {
        return $this->username;
    }
}