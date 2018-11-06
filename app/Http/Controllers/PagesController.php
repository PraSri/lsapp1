<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'Welcome To Prakhar Srivastava blog!!!!';  
        
        //return view('pages.index' , compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = "About US";
        return view('pages.about')->with('title',$title);
    }

    public function service(){
        /* $title = "Services";
        return view('pages.service')->with('title',$title); */
        $data = array(
            'title'=> 'Services',
            'services' => ['Write Reviews','Rate','Comments']
        );
        return view('pages.service')->with($data);
    }
}
