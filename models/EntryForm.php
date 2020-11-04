<?php

namespace app\models;
use Yii;

use yii\base\Model;

class EntryForm extends Model
{
    public $name , $email;

    public function rules()
    {
        return [
            [
                [
                    'name',
                    'email'
                ], // entities grouped to the same rule
                'required' // rule 
            ],
            [
                'email', // single entry 
                'email' // rule
            ]
        ];
    }
}