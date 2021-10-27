<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(){

        $tasks=[
            'task-1'=>'Maker your assignment',
            'task-2'=>'Check your phone',
            'task-3'=>'Watch a match'
            ];
            return view('contact',compact('tasks'));

    }
    public function about(){


        $name =' ';
        // return view('about',['name'=>$name, 'age'=>$age]);
        // return view('about')->with('name',$name)->with('age',$age);
        return view('about',compact('name'));             //the best and easy one of them.
    }

    public function show(){

        $name =' ';
        $name = $_REQUEST['name'];
        return view('about',compact('name'));              //the best and easy one of them.
    }


    public function contact(){

        $tasks=[
            'task-1'=>'Maker your assignment',
            'task-2'=>'Check your phone',
            'task-3'=>'watch a match'
          ];
      return view('contach',compact('tasks'));
}





}
