<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use KingOfCode\Upload\Uploadable;

class About extends Model
{
    use HasFactory;
    use Uploadable;

    protected $fillable = [
        'main_title',
        'partners_title'
    ];

    protected $uploadableImages = [
        'image'
    ];

    protected $table = 'about';

    private function deleteImageFiles($imageField) {

        Storage::delete([
            $this->getImageDatabasePath($imageField),
            $this->getImageDatabasePath($imageField, 'medium'),
            $this->getImageDatabasePath($imageField, 'thumb'),
        ]);
        $this->{$imageField} = null;
    }

    private function getImageDatabasePath($imageField, $type = 'normal') {
        $genericPath = $this->{$imageField};
        return str_replace('{type}', $type, $genericPath);
    }

    function edit($fields) {
        foreach ($this->uploadableImages as $imageFieldName) {
            if(request()->hasFile($imageFieldName)) {
                $this->deleteImageFiles($imageFieldName);
            }
        }

        $this->fill($fields);
        $this->save();
    }

}
