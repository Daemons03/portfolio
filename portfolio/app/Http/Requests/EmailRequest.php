<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'name.required' => 'bail|required|name|min:3|max:50',
            'email' => 'bail|required|email|min:10|max:255',
            'sujet.required' => 'bail|required|sujet|min:10|max:100',
            'message.required' => 'bail|required|message|min:10|max:10000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom n\'est pas renseigné !',
            'email.required' => 'Le mail n\'est pas renseigné !',
            'email.email' => 'Le mail n\'est pas renseigné !',
            'sujet.required' => 'Le sujet n\'est pas renseigné !',
            'message.required' => 'Le message n\'est pas renseigné !'
        ];
    }

}
