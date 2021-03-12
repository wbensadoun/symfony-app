<?php
namespace app\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController{

    /* @Route("hello") */
 function hello(Request $request){
$params = $request->query->all();
$string = "Les paramètres sont : </br>";
foreach($params as $key => $value){
    $string = $string . '-' . $key . ':' . $value . '</br>';
    return new Response($string);
}
    

    /*
    $title ="utilisateurs";
    $users = ["Mickey", "Leo", "Donnie", "Raph"];
    return $this->render('hello.html.twig',['title' => $title, 'array' => $users]);     */ 
 }
}
