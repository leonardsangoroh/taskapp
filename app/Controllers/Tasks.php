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

        //The method below is similar to the php var_dump() method (for printing on the display)
        //dd($task);

        return view('Tasks/show', ['task' => $task]);
    }

    public function new () {
        return view('Tasks/new');
    }

    public function create () {

        $model = new \App\Models\TaskModel;

        $result = $model->insert([
            'description' => $this->request->getPost('description')
        ]);
        
        //Checking for validation state
        if ($result == false) {

            //In order for the errors to be passed to the view, an automatic session will be created
            return redirect()->back()
                             ->with('errors', $model->errors()
                             //using flashdata (data displayed once then destroyed)
                             ->with('warning', 'Invalid data'));
        }

        else {

            return redirect()->to("/tasks/show/$result")
                             //using flashdata (data displayed once then destroyed)
                             ->with('info', 'Task created successfully');
        }

    }

}
