<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model{
     protected $table = 'project';
     protected $fillable = [
        'id', 'title', 'date_creation', 'date_fin_creation', 'description', 'image',
    ];
}
