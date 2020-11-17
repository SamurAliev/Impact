<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'service1',
        'service2',
        'service3',
        'service4',
        'service5',
        'service6',
        'name_input',
        'number_input',
    ];


    protected $table = 'contact';

    function edit($fields) {
        $this->fill($fields);
        $this->save();
    }
}
