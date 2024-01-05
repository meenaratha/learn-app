<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
     /**
     * @Route("/", name="home", methods={"GET", "HEAD"})
     */
    public function index(){
        return view('frontend.home');
    }

    public function welcome(){
        return view('frontend.home');
    }


}
