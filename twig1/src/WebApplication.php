<?php
namespace Tudublin;

class WebApplication
{

  const PATH_TO_TEMPLATES = __DIR__ .'/../templates';
  private $mainController;

  public function __construct()
  {
      $twig = new \Twig\Environment(new\Twig\Loader\FilesystemLoader(self::PATH_TO_TEMPLATES));
      $this->mainController = new MainController($twig);
  }

    public function run()
  {
     $action = filter_input(INPUT_GET,'action');

     //$mainController = new MainController();
     switch ($action){
         case 'contact';
         $this->mainController->contact();
         break;

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
       // include __DIR__ . '/../templates/home.html.twig';
   // }

   // public function jokes()
   // {
        //$pageTitle = 'jokes';
      //  include __DIR__ . '/../templates/jokes.html.twig';
   // }

}