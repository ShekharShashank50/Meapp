<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to Lorrywalo';
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function forum(){
       return view('pages.forum');
    }
    public function services(){
        $data=array(
            'title'=>'Services',
            'services' =>['Help','Loans','License']
        );
        return view('pages.services')->with($data);
    }
    public function messenger(){
        return view('pages.messenger');
     }
}
