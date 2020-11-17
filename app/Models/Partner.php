<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KingOfCode\Upload\Uploadable;

class Partner extends Model
{
    use HasFactory;
    use Uploadable;

    protected $guarded = [];

    protected $uploadableImages = [
        'image'
    ];

    static function add($fields) {
        $tariff = new static;
        $tariff->fill($fields);
        $tariff->save();
    }
}
