<?php

namespace Tudublin;

use Tudublin\UserRepository;
use Tudublin\User;

class MainController
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    function homeAction()
    {
        $pageTitle = 'home';
        $homePageStyle = "current_page";
        require_once __DIR__ . '/../templates/home.php';
    }


    function registerAction()
    {
        $pageTitle = 'register';
        $loginPageStyle = "current_page";
        require_once __DIR__ . '/../templates/register.php';
    }

    function messageAction()
    {
        $pageTitle = 'backMessage';
        $loginPageStyle = "current_page";
        require_once __DIR__ . '/../templates/message.php';
    }

    public function loginForm()
    {
        $pageTitle = 'login';
        $loginPageStyle = "current_page";
        require_once __DIR__ . '/../templates/login.php';
    }

    public function reviewForm()
    {
        $pageTitle = 'review';
        $reviewPageStyle = "current_page";
        require_once __DIR__ . '/../templates/review.php';
    }

    public function contactAction()
    {
        $pageTitle = 'contact';
        $contactPageStyle = "current_page";
        require_once __DIR__ . '/../templates/contact.php';
    }

    public function seasonAction()
    {
        $seasonRepository = new SeasonRepository();
        $seasons = $seasonRepository->getAll();

        $pageTitle = 'season';
        $seasonPageStyle = "current_page";
        require_once  __DIR__ . '/../templates/season.php';
    }



    public function processRegistration()
    {
        $username = filter_input(INPUT_GET, 'username');
        $password = filter_input(INPUT_GET, 'password');

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);

        $id = $this->userRepository->create($user);

        if($id > 1){
            $message = "User $username, has been registered";
            require_once __DIR__ . '/../templates/message.php';
        } else {
            $message = "error creating new user";
            require_once __DIR__ . '/../templates/error.php';

        }
    }

}