<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    function edit($request) {
        $this->fill($request->all());
        $this->save();
    }

    static function add($fields, $serviceId) {
        $tariff = new static;
        $tariff->fill($fields);
        $tariff->service_id = $serviceId;
        $tariff->save();
    }
}
