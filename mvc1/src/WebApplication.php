<?php
namespace Tudublin;

class WebApplication
{
  private $mainController;

  public function __construct()
  {
      $this->mainController = new MainController();
  }

    public function run()
  {
     $action = filter_input(INPUT_GET,'action');

     //$mainController = new MainController();
     switch ($action){
         case 'jokes';
         $this->mainController->jokes();
         break;

         case 'index';
         default:
             $this->mainController -> index();
     }
  }
   // public function index()
    //{
       // $pageTitle = 'home';
       // include __DIR__ . '/../templates/home.php';
   // }

   // public function jokes()
   // {
        //$pageTitle = 'jokes';
      //  include __DIR__ . '/../templates/jokes.php';
   // }

}