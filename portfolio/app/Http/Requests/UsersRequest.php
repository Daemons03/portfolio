<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'email' => 'bail|required|email|min:10|max:255'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Le mail l\'est pas renseigné !',
            'email.email' => 'Le mail l\'est pas renseigné !',
            'password.required' => 'Le password n\'est pas renseigné !'
        ];
    }
}
