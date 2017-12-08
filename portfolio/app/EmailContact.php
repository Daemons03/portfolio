<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailContact extends Model{
    
     protected $table = 'mail';
     protected $fillable = [
        'name', 'mail','subjet','content','uptadated_at','created_at',
    ];
    
}