<?php

//The name of the model should be the same as the database table name followed by the word 'model'
namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'task';

    protected $allowedFields = ['description'];

    //validation rules
    protected $validationRules = [
        'description' => 'required'
    ];

    //validation messages
    protected $validationMessages = [
        'description' => [
            'required' => 'Please enter a description'
        ]
        ];
}
