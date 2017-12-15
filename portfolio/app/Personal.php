<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model{
    protected $table = 'personal';
    protected $fillable = [
        'id', 'description', 'birthday', 'telephone_number', 'mail',
    ];
}
