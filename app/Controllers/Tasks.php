<?php

namespace App\Controllers;

class Tasks extends BaseController
{
    public function index()
    {
       /* $data = [
            ['id' => 1 , 'description'=>'First task'],
            ['id'=> 2, 'description' => 'Second task']
        ]; 
        return view('Tasks/index', ['tasks' => $data]);
        */

        $model = new \App\Models\TaskModel;
        $data = $model->findAll();

        return view('Tasks/index',['tasks'=>$data]);

        
    }

    public function show($id) {

        $model = new \App\Models\TaskModel;

        $task = $model->find($id);

        //The method below is similar to the php var_dump() method
        //dd($task);
    }
}