<?php
namespace Tudublin;

class LoginController
{
    private $userRepository;
    private $mainController;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }
    function loginAction($error = false)
    {
        $pageTitle = 'login';
        $loginPageStyle = "current_page";
        if($error)
        {
            $errorMessage = 'Invalid credentials';
        }
        require_once __DIR__ . '/../templates/login.php';
    }

    public function processLogin()
    {
        $username = filter_input(INPUT_GET, 'username');
        $password = filter_input(INPUT_GET, 'password');

        if ($this->validLoginCredentials($username, $password)) {
            $this->sucessfulLogin($username);

        } else {
            $this->loginAction(true);
        }
    }
    private function validLoginCredentials($username,$password)
    {
        if ($this->userRepository->exitsUser($username, $password)) {
            return true;
        } else {
            return false;
        }
    }
    public function sucessfulLogin($username){
        $_SESSION['username'] = $username;
        $mainController = new MainController();
        $mainController->homeAction();
    }

    public function logout()
    {
        $_SESSION = [];
        $mainController = new MainController();
        $mainController->homeAction();
    }
}