<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TaskController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[

            'task' =>'required|max:100|min:5',



        ]);
        $task= new Tasks;
        $task-> Tasks=$request -> task;
        $task->save();

       $data=Tasks::all();
       //dd($data);

       return view('tasks')->with('tasks',$data);




    }
}
