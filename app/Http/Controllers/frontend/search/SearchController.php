<?php

namespace App\Http\Controllers\frontend\search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //check if there is a search
    //if there is , check the search value with our database

    public function index(){
        $ideas = Idea::orderBy('created_at','DESC');
        // where content ="test"
        if(request()->has('search')){
              $ideas = $ideas->where('content','like','%'.request()->get('search','').'%');
        }

        return view('frontend.pages.search',['ideas' => $ideas->paginate[5]]);
    }
}
