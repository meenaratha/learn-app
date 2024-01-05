<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ClassroomController extends Controller
{
    function course_one(){
        return view('frontend.class-room-training.blog');
    }
    function course_two(){
        return view('frontend.class-room-training.blog-single');
    }
    function course_three(){
        return view('frontend.class-room-training.blog-v1');
    }
}
